<?php
class Route
{

    static function start($routes)
    {
        // контроллер и действие по умолчанию
        $controller_name = 'Main';
        $action_name='index';
        // получаем имя контроллера
        if ( !empty($routes[START_POSITION]) )
        {
            $controller_name = $routes[START_POSITION];
        }

        // получаем имя экшена
        if ( !empty($routes[START_POSITION+1]) )
        {
            $action_name = $routes[START_POSITION+1];
        }

        // добавляем префиксы
        //$model_name = 'model_'.$controller_name;
        $controller_name = 'controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        /*
        echo "Model: $model_name <br>";
        echo "Controller: $controller_name <br>";
        echo "Action: $action_name <br>";
        */

        // подцепляем файл с классом модели (файла модели может и не быть)

        /*$model_file = strtolower($model_name).'.php';
        $model_path = "bizz/model/".$model_file;
        if(file_exists($model_path))
        {
            include "bizz/model/".$model_file;
        }*/
        // подцепляем файл с классом контроллера
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "bizz/controler/".$controller_file;
        if(file_exists($controller_path))
        {

            include "bizz/controler/".$controller_file;
        }
        else
        {

            Route::ErrorPage404(URL_BASE);
        }

        // создаем контроллер
        $controller = new $controller_name($routes);
        $action = $action_name;

        if(method_exists($controller, $action))
        {
            $controller->$action();

        }
        else
        {
            Route::ErrorPage404(URL_BASE);
        }

    }

    function ErrorPage404($directory)
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].$directory.'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }

}
