<?php

namespace App\Http\Controllers;

use App\Services\BubbleSortInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Psr\Log\LoggerInterface;

class BubbleSortController extends BaseController
{
    private $logger;
    private $bubbleSort;

    /**
     * @param LoggerInterface $logger
     * @param BubbleSortInterface $bubbleSort
     */
    public function __construct(LoggerInterface $logger, BubbleSortInterface $bubbleSort)
    {
        $this->logger = $logger;
        $this->bubbleSort = $bubbleSort;
    }

    public function sortList()
    {
        try {
            $timeStart = time();
            $this->bubbleSort->sort([1, 6, 12, 4, 10, 15, 3, 6, 17, 5]);

            $timeEnd = time();
            $this->logger->debug($timeEnd - $timeStart);
            $this->logger->debug(memory_get_usage());
        } catch (\Throwable $exception) {
            $this->logger->error('здесь были ошибки: ' . $exception->getMessage());
        }
    }
}
