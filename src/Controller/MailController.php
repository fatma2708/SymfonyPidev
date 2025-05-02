<?php

namespace App\Controller;

use App\Repository\BlessureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MailController extends AbstractController
{
    private BlessureRepository $blessureRepository;
    private MailerInterface $mailer;

    public function __construct(BlessureRepository $blessureRepository, MailerInterface $mailer)
    {
        $this->blessureRepository = $blessureRepository;
        $this->mailer = $mailer;
    }

    /**
     * Envoie un e-mail à un athlète lorsqu'une nouvelle blessure lui est associée.
     */
    #[Route('/api/blessure/notify', name: 'blessure_notify', methods: ['POST'])]
    public function notifyAthlete(): JsonResponse
    {
        // Récupérer les nouvelles blessures (par exemple, celles qui n'ont pas encore été notifiées)
        $newBlessures = $this->blessureRepository->findNewBlessures();

        if (count($newBlessures) > 0) {
            

                
                    // Construire l'e-mail
                    $email = (new Email())
                        ->from('hello@demomailtrap.co') // Adresse expéditrice
                        ->to('oussama.mouldi@esprit.tn') // Adresse de l'athlète
                        ->subject('🚨 Notification de blessure')
                        ->html($this->renderView('emails/blessure_notification.html.twig', [
                            'blessure' => $blessure,
                        ]));

                    // Envoyer l'e-mail
                    $this->mailer->send($email);

                    // Marquer la blessure comme notifiée (optionnel)
                    $blessure->setNotified(true);
                
            

            return new JsonResponse(['status' => 'success', 'message' => 'Notifications envoyées avec succès.'], Response::HTTP_OK);
        }

        return new JsonResponse(['status' => 'success', 'message' => 'Aucune nouvelle blessure à notifier.'], Response::HTTP_OK);
    }
}