<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        return view('welcome');
    }

    public function getKeyword(Request $request) {

        $process = new Process(['/Users/kseniaanohina/.conda/envs/caspar_try1/bin/python', '/Users/kseniaanohina/PycharmProjects/caspar_try1/main.py', $request['url']]);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();

    }

    public function getImage(Request $request) {
        // TODO: Change the python file to exdecute. Make a new file that searches for keyword instead of image URL
        $process = new Process(['/Users/kseniaanohina/.conda/envs/caspar_try1/bin/python', '/Users/kseniaanohina/PycharmProjects/caspar_try1/getimage.py', $request['keywords']]);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }

    public function getKeywordsFromBase64(Request $request) {
        $base64 = $request[0];
        $process = new Process([env('PYTHON_LOCATION'), '/Users/kseniaanohina/PycharmProjects/caspar_try1/getKeywordsFromBase64.py', $base64]);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
}

