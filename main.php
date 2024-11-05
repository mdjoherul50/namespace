<?php
require_once 'src/Backend/User.php';
require_once 'src/Frontend/User.php';
use NSpacePractice\Frontend\User as FrontendUser;
use NSpacePractice\Backend\User as BackendUser;
//দীর্ঘ নেমস্পেস নাম সহজে ব্যবহারের জন্য এলিয়াসিং করা যায় use কীওয়ার্ডের মাধ্যমে


// $frontUser = new NSpacePractice\Frontend\User;
$frontUser = new FrontendUser();
$frontUser->UserName('Jahirul');
$frontUser->Age(24);


// $backendUser = new NSpacePractice\Backend\User;
$backendUser = new BackendUser();
$backendUser->UserName("Tariqul Islam");
$backendUser->Age(45);