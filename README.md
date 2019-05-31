# Laravel4.2 Font Confusion

## Usage(for internal use only)

1. composer require sibosend/font-confusion
2. add provider to config file app.php:
    `Sibosend\FontConfusion\FontConfusionServiceProvider`
3. add Facade:
    `'ConfusedFont'=> 'Sibosend\FontConfusion\Facades\ConfusedFont',`
4. copy src/config/font_confusion.php to your project app/config
5. copy src/views/confusedFont.blade.php to your project app/views
6. include view 'confusedFont' in which page need confuse font, and add 'confused_font' to the text:
````
<head>
    ......
    @include('confusedFont')
    ......
</head>
````

<span class="confused_font"><% ConfusedFont::getConfusedStr('confuse text') %></span>
