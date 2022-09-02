<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Form\EvaluationType;
use App\Repository\EvaluationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;



/**
 * @isGranted("ROLE_ADMIN")
 * @Route("/evaluation")
 */
class EvaluationController extends AbstractController
{
    /**
     * @Route("/", name="app_evaluation_index", methods={"GET"})
     */
    public function index(EvaluationRepository $evaluationRepository): Response
    {
        return $this->render('evaluation/index.html.twig', [
          //  'evaluations' => $evaluationRepository->findAll(),
         'evaluations' => $evaluationRepository->findByEvaluation(),
        ]);
        
    }
    

    /**
     * @Route("/new", name="app_evaluation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EvaluationRepository $evaluationRepository): Response
    {
        $evaluation = new Evaluation();
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evaluationRepository->add($evaluation);
            return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evaluation/new.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idevaluation}", name="app_evaluation_show", methods={"GET"})
     */
    public function show(Evaluation $evaluation): Response
    {
        return $this->render('evaluation/show.html.twig', [
            'evaluation' => $evaluation,
        ]);
    }

    /**
     * @Route("/{idevaluation}/edit", name="app_evaluation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Evaluation $evaluation, EvaluationRepository $evaluationRepository): Response
    {
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evaluationRepository->add($evaluation);
            return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evaluation/edit.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idevaluation}", name="app_evaluation_delete", methods={"POST"})
     */
    public function delete(Request $request, Evaluation $evaluation, EvaluationRepository $evaluationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evaluation->getIdevaluation(), $request->request->get('_token'))) {
            $evaluationRepository->remove($evaluation);
        }

        return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
    }
}
