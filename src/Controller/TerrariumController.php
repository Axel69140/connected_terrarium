<?php

namespace App\Controller;

use App\Entity\Terrarium;
use App\Form\TerrariumType;
use App\Repository\TerrariumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/terrarium')]
class TerrariumController extends AbstractController
{
    #[Route('/', name: 'app_terrarium_index', methods: ['GET'])]
    public function index(TerrariumRepository $terrariumRepository): Response
    {
        return $this->render('terrarium/index.html.twig', [
            'terraria' => $terrariumRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_terrarium_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TerrariumRepository $terrariumRepository): Response
    {
        $terrarium = new Terrarium();
        $form = $this->createForm(TerrariumType::class, $terrarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $terrariumRepository->save($terrarium, true);

            return $this->redirectToRoute('app_terrarium_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('terrarium/new.html.twig', [
            'terrarium' => $terrarium,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_terrarium_show', methods: ['GET'])]
    public function show(Terrarium $terrarium): Response
    {
        return $this->render('terrarium/show.html.twig', [
            'terrarium' => $terrarium,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_terrarium_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Terrarium $terrarium, TerrariumRepository $terrariumRepository): Response
    {
        $form = $this->createForm(TerrariumType::class, $terrarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $terrariumRepository->save($terrarium, true);

            return $this->redirectToRoute('app_terrarium_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('terrarium/edit.html.twig', [
            'terrarium' => $terrarium,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_terrarium_delete', methods: ['POST'])]
    public function delete(Request $request, Terrarium $terrarium, TerrariumRepository $terrariumRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$terrarium->getId(), $request->request->get('_token'))) {
            $terrariumRepository->remove($terrarium, true);
        }

        return $this->redirectToRoute('app_terrarium_index', [], Response::HTTP_SEE_OTHER);
    }
}
