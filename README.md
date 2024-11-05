# namespace
PHP Namespace Practice

নেমস্পেস (Namespace) হলো PHP-তে একটি সংগঠিত উপায়ে কোড এবং ক্লাস গুলোকে আলাদা রাখার একটি প্রক্রিয়া। বড় প্রজেক্টে অনেকগুলো ক্লাস, ফাংশন বা কনস্ট্যান্ট থাকতে পারে। নেমস্পেস ব্যবহারের মাধ্যমে এগুলোকে বিভিন্ন গ্রুপ বা বিভাগে ভাগ করা যায়, যাতে একই নামে থাকা ক্লাস বা ফাংশনগুলোর মধ্যে কনফ্লিক্ট না হয় এবং কোড ম্যানেজমেন্ট সহজ হয়।

উদাহরণস্বরূপ, নেমস্পেস ছাড়া সমস্যাঃ
ধরুন, আপনার প্রজেক্টে User নামে দুটি ক্লাস আছে - একটি Frontend কাজের জন্য এবং অন্যটি Backend কাজের জন্য। যদি নেমস্পেস ব্যবহার না করা হয়, তবে User নামের দুটি ক্লাস ব্যবহারের সময় কনফ্লিক্ট বা সমস্যা হতে পারে, কারণ PHP একই নামে দুইটি ক্লাস চিহ্নিত করতে পারবে না।

ফাইল ১: src/Frontend/User.php
php
Copy code
<?php
namespace MyProject\Frontend;

class User {
    public function UserName() {
        echo "ফ্রন্টএন্ডের ইউজারনেম ফাংশন চালানো হচ্ছে।<br>";
    }

    public function Age() {
        echo "ফ্রন্টএন্ডের ইউজারের বয়স প্রদর্শন করা হচ্ছে।<br>";
    }
}
ফাইল ২: src/Backend/User.php
php
Copy code
<?php
namespace MyProject\Backend;

class User {
    public function UserName() {
        echo "ব্যাকএন্ডের ইউজারনেম ফাংশন চালানো হচ্ছে।<br>";
    }

    public function Age() {
        echo "ব্যাকএন্ডের ইউজারের বয়স প্রদর্শন করা হচ্ছে।<br>";
    }
}
ফাইল ৩: main.php
php
Copy code
<?php
// প্রয়োজনীয় ফাইলগুলো ইনক্লুড করা
require_once 'src/Frontend/User.php';
require_once 'src/Backend/User.php';

// Frontend এবং Backend নেমস্পেসের User ক্লাসগুলো ব্যবহার করা
use MyProject\Frontend\User as FrontendUser;
use MyProject\Backend\User as BackendUser;

// Frontend User
$frontendUser = new FrontendUser();
$frontendUser->UserName();
$frontendUser->Age();

// Backend User
$backendUser = new BackendUser();
$backendUser->UserName();
$backendUser->Age();
ব্যাখ্যা
ফাইল ইনক্লুড: require_once ব্যবহার করে src/Frontend/User.php এবং src/Backend/User.php ফাইল দুটি main.php ফাইলে ইনক্লুড করা হয়েছে।
নেমস্পেস এবং ফাংশন: Frontend এবং Backend নেমস্পেসের User ক্লাসের মধ্যে UserName এবং Age নামে দুটি ফাংশন সংজ্ঞায়িত করা হয়েছে।
ফাংশন ব্যবহার: FrontendUser এবং BackendUser নামে আলাদা ক্লাস নাম ব্যবহার করা হয়েছে যাতে প্রতিটি নেমস্পেসের ক্লাস এবং ফাংশনগুলো আলাদাভাবে ব্যবহার করা যায়।
