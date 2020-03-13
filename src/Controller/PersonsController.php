<?php

namespace App\Controller;

use App\Entity\Persons;
use App\Form\PersonsType;
use App\Repository\PersonsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/persons")
 */
class PersonsController extends AbstractController
{
    /**
     * @Route("/", name="persons_index", methods={"GET"})
     */
    public function index(PersonsRepository $personsRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $q = $request->query->get('q');

        $queryBuilder = $personsRepository->getWithSearchQueryBuilder($q);
        $pagination = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('persons/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * @Route("/new", name="persons_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $person = new Persons();
        $form = $this->createForm(PersonsType::class, $person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($person);
            $entityManager->flush();

            return $this->redirectToRoute('persons_index');
        }

        return $this->render('persons/new.html.twig', [
            'person' => $person,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="persons_show", methods={"GET"})
     */
    public function show(Persons $person): Response
    {
        return $this->render('persons/show.html.twig', [
            'person' => $person,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="persons_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Persons $person): Response
    {
        $form = $this->createForm(PersonsType::class, $person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('persons_index');
        }

        return $this->render('persons/edit.html.twig', [
            'person' => $person,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="persons_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Persons $person): Response
    {
        if ($this->isCsrfTokenValid('delete'.$person->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($person);
            $entityManager->flush();
        }

        return $this->redirectToRoute('persons_index');
    }
}
