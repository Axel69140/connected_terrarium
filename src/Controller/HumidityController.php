<?php

namespace App\Controller;

use App\Entity\Humidity;
use App\Form\HumidityType;
use App\Repository\HumidityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/humidity')]
class HumidityController extends AbstractController
{
    #[Route('/', name: 'app_humidity_index', methods: ['GET'])]
    public function index(HumidityRepository $humidityRepository): Response
    {
        return $this->render('humidity/index.html.twig', [
            'humidities' => $humidityRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_humidity_new', methods: ['GET', 'POST'])]
    public function new(Request $request, HumidityRepository $humidityRepository): Response
    {
        $humidity = new Humidity();
        $form = $this->createForm(HumidityType::class, $humidity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $humidityRepository->save($humidity, true);

            return $this->redirectToRoute('app_humidity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('humidity/new.html.twig', [
            'humidity' => $humidity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_humidity_show', methods: ['GET'])]
    public function show(Humidity $humidity): Response
    {
        return $this->render('humidity/show.html.twig', [
            'humidity' => $humidity,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_humidity_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Humidity $humidity, HumidityRepository $humidityRepository): Response
    {
        $form = $this->createForm(HumidityType::class, $humidity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $humidityRepository->save($humidity, true);

            return $this->redirectToRoute('app_humidity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('humidity/edit.html.twig', [
            'humidity' => $humidity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_humidity_delete', methods: ['POST'])]
    public function delete(Request $request, Humidity $humidity, HumidityRepository $humidityRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$humidity->getId(), $request->request->get('_token'))) {
            $humidityRepository->remove($humidity, true);
        }

        return $this->redirectToRoute('app_humidity_index', [], Response::HTTP_SEE_OTHER);
    }
}
