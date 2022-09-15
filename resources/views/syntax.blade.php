<?php
if (a > 0) {
    echo 'nagyobb'
}
elseif (a < 0) {
    echo "kisebb"
}
else {
    echo "nulla"
}

@if(a > 0)
    nagyobb
@elseif(a < 0)
    kisebb
@else
    nulla
@endif

for($i = 0; $i < 10; $i++) {
    echo $i;
}

@for($i = 0; $i < 10; $i++)
    $i
@endfor

@foreach($lista : $elem)
    valamit csinálok

@endforeach
?>