<?php

it('that true is true', function (): void {
    $true = true;
    expect($true)->tobe(true);
});
