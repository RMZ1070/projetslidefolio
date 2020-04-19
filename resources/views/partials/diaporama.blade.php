@php
    
    echo "<script>";

    echo "$.vegas('slideshow', {
        delay:5000,
        backgrounds:[";

    foreach ($diaporamas as $diaporama) {
        echo "{ src:'storage/".$diaporama->image."', fade: 2000},";
    }

    echo "]
        })('overlay', {
        src:'./img/overlay.png'
        });
    
        </script>";

@endphp