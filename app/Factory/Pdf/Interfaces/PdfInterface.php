<?php

declare(strict_types=1);

namespace App\Factory\Pdf\Interfaces;

use App\Factory\Pdf\Pdf;

interface PdfInterface
{
    /**
     * @param string $view
     * @param array $viewData
     * @return mixed
     * @see Pdf::download()
     */
    public function download(string $view, array $viewData = []): mixed;
}
