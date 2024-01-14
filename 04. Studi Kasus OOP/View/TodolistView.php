<?php

namespace View {

    use Helper\InputHelper;
    use Services\TodolistService;

    class TodolistView
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService  = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "" . PHP_EOL;
                echo "=   Menu  =" . PHP_EOL;
                echo "===========" . PHP_EOL;

                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "pilihan menu tidak ditemukan" . PHP_EOL;
                    echo "" . PHP_EOL;
                }
            }

            echo "Bye bye...." . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "Menambah TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo != "x") {
                $this->todolistService->addTodolist($todo);
            } else {
                echo "Batal tambah todo" . PHP_EOL;
            }
        }

        function removeTodolist(): void
        {
            echo "Menghapus Todo" . PHP_EOL;

            $pilihan = InputHelper::input("Nomer (x untuk batal)");

            if ($pilihan != "x") {
                $this->todolistService->removeTodolist($pilihan);
            } else {
                echo "Batal menghapus todo" . PHP_EOL;
            }
        }
    }
}
