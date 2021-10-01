<?php

function setFlash(array $flash)
{
    $_SESSION['flash_message'] = $flash[0];
    $_SESSION['class'] = $flash[1];

    return $_SESSION;
}

function getFlash()
{
    return "<div class='alert " . $_SESSION['class'] . "'> " . $_SESSION['flash_message'] . "
    <button type='button' class='btn-close align-middle' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}

function destroyFlash()
{
    unset($_SESSION['flash_message']);
    unset($_SESSION['class']);
}
