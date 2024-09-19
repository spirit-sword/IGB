<?php
function create_body_card($card_content_function)
{
    $card_body_html = '
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-950 py-6">
        <div id="body_card" class="relative bg-black w-auto px-6 py-2 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:rounded-lg sm:px-10">
            %s
        </div>
    </div>
    ';

    $card_content = $card_content_function();

    $card_body_html = sprintf($card_body_html, $card_content);

    return $card_body_html;
}