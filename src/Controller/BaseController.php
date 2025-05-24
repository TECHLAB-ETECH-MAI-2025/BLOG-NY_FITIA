<?php
    namespace App\Controller;

    use App\Form\SearchType;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class BaseController extends AbstractController
    {
        protected function getSearchForm()
        {
            return $this->createForm(SearchType::class, null, [
                'action' => $this->generateUrl('app_search'),
                'method' => 'GET'
            ]);
        }
    }