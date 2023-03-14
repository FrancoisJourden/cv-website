<!DOCTYPE html>
<html lang="<?php echo lang('App.lang') ?>" class="scroll-smooth">
<head>
    <!--    <meta charset="UTF-8">-->
    <title>François Jourden</title>
    <meta name="description" content="Currently searching for an internship outside of France">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="favicon.ico">
    <link href="style.css" rel="stylesheet">
    <style>
        .main-page-icons svg {
            width: 64px;
            height: 64px;
        }

        #go-to-about svg {
            width: 48px;
            height: 48px;
        }

        .toggler-icons img {
            width: 24px;
            height: 24px;
        }
    </style>
    <script>
        function toggleDarkMode() {
            switch (localStorage.theme) {
                case 'light':
                    localStorage.theme = 'dark';
                    break;
                case 'dark':
                    localStorage.removeItem('theme');
                    break;
                default:
                    localStorage.theme = 'light';
            }
            updateTheme();
        }

        function updateThemeIcon() {
            let image_to_show = "";
            switch (localStorage.theme) {
                case 'light':
                    image_to_show = "icon-tabler-sun";
                    break;
                case 'dark':
                    image_to_show = "icon-tabler-moon";
                    break;
                default:
                    image_to_show = "icon-tabler-sun-moon";
            }

            document.querySelectorAll("#darkmode-toggler svg").forEach((icon) => {
                if (icon.classList.contains(image_to_show)) icon.classList.remove('hidden')
                else icon.classList.add('hidden');
            })
        }

        function updateTheme() {
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }
            updateThemeIcon();
        }

        function toggleLanguage() {
            let params = new URLSearchParams(window.location.search);
            switch (document.documentElement.lang) {
                case 'fr':
                    params.set('locale', 'en');
                    break;
                case 'en':
                default:
                    params.set('locale', 'fr');
                    break;
            }
            window.location.search = params.toString()
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('#darkmode-toggler').addEventListener('click', toggleDarkMode);
            document.querySelector('#lang-toggler').addEventListener('click', toggleLanguage);
            updateTheme();
        });
    </script>
</head>


<body class="font-Roboto dark:text-white dark:bg-gray-800">
<header class="h-screen w-full flex bg-gray-800 text-white p-8 bg-[url('header_bg_blurred.png')] bg-cover backdrop-blur">
    <div id="darkmode-toggler" class="absolute left-10 top-10 border rounded p-1 hover:backdrop-contrast-50 hover:cursor-pointer active:backdrop-contrast-75 toggler-icons">
        <?php include("../public/icons/sun-moon.svg") ?>
        <?php include("../public/icons/sun.svg") ?>
        <?php include("../public/icons/moon.svg") ?>
    </div>
    <div id="lang-toggler" class="absolute right-10 top-10 border rounded p-1 hover:backdrop-contrast-50 hover:cursor-pointer active:backdrop-contrast-75 toggler-icons">
        <img src="icons/<?php echo lang('App.lang') ?>.svg" alt="lang">
    </div>
    <div class="self-center mx-auto align-middle flex flex-col text-center">
        <h1 class="text-6xl font-bold border border-2 rounded p-4">François Jourden</h1>
        <p class="text-xl">
            <?php echo lang('App.header_student') ?>
            <a href="https://www.enssat.fr" class="underline hover:bg-white hover:text-neutral-800 hover:no-underline rounded px-1">ENSSAT</a>
        </p>
        <hr class="my-2 w-16 mx-auto">
        <p class="text-xl mb-4">
            <?php echo lang('App.header_developer') ?>
            <a href="https://groupeledu.com" class="underline hover:bg-white hover:text-neutral-800 hover:no-underline rounded px-1">Groupe Le Du</a>
        </p>
        <div class="flex flex-row justify-evenly text-white main-page-icons">
            <a href="https://www.linkedin.com/in/fran%C3%A7ois-jourden-6313931b6/" target="_blank" class="hover:bg-white hover:text-gray-800 rounded-xl">
                <?php include("../public/icons/brand-linkedin.svg") ?>
            </a>
            <a href="https://github.com/FrancoisJourden" target="_blank" class="hover:bg-white hover:text-gray-800 rounded-xl">
                <?php include("../public/icons/brand-github.svg") ?>
            </a>
            <a href="#" target="_blank" class="hover:bg-white hover:text-gray-800 rounded-xl">
                <?php include("../public/icons/file-info.svg") ?>
            </a>
            <a href="mailto:francoisjourdenpro@gmail.com" target="_blank" class="hover:bg-white hover:text-gray-800 rounded-xl">
                <?php include("../public/icons/mail.svg") ?>
            </a>
        </div>
    </div>
    <div class="absolute left-1/2 bottom-10 -translate-x-1/2" id="go-to-about">
        <a href="#about" class="mx-auto"><?php include("../public/icons/arrow-down.svg") ?></a>
    </div>
</header>

<main class="p-8 max-w-6xl mx-auto">
    <div id="about" class="text-justify mb-8">
        <h1 class="text-4xl text-center mb-4"><?php echo lang('App.about_title') ?></h1>
        <div class="w-fit mx-auto">
            <p>
                <?php echo lang('App.about_sentence_1') ?>
                <br>
                <?php echo lang('App.about_sentence_2') ?>
            </p>
            <br>
            <p><?php echo lang('App.about_sentence_3') ?></p>
            <br>
            <p><?php echo lang('App.about_sentence_4') ?></p>
        </div>
    </div>

    <div id="curriculum" class="mb-8">
        <h1 class="text-4xl text-center mb-4"><?php echo lang('App.course_title') ?></h1>
        <ul class="w-fit mx-auto list-none">
            <li class="mb-2"><strong>2013</strong>: <?php echo lang('App.course_first_computer') ?></li>
            <li class="mb-2"><strong>2016</strong>: <?php echo lang('App.course_build_computer') ?></li>
            <li class="mb-2"><strong>2017</strong>: <?php echo lang('App.course_m_school_diploma') ?></li>
            <li class="mb-2"><strong>2020</strong>: <?php echo lang('App.course_h_school_diploma') ?></li>
            <li class="mb-2"><strong>2021</strong>: <?php echo lang('App.course_groupe_le_du') ?></li>
            <li class="mb-2"><strong>2022</strong>: <?php echo lang('App.course_dut') ?></li>
            <li class="mb-2"><strong>2022</strong>: <?php echo lang('App.course_enssat') ?></li>
        </ul>
    </div>

    <div id="technical-skills">
        <h1 class="text-4xl text-center mb-4"><?php echo lang('App.skills_title') ?></h1>
        <div class="flex flex-col md:grid md:grid-cols-2 gap-8 lg:grid-cols-4">
            <div class="bg-blue-600 dark:bg-opacity-75 rounded p-4 text-white">
                <h2 class="text-xl text-center">Web back-end</h2>
                <ul class="w-fit mx-auto">
                    <li class="mb-2">
                        <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-php.svg") ?></span><?php echo lang('App.skills_native_php') ?></span>
                        <ul class="pl-4 list-inside list-disc">
                            <li><?php echo lang('App.skills_work_school_personal') ?></li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-laravel.svg") ?></span>Laravel</span>
                        <ul class="pl-4 list-inside list-disc">
                            <li><?php echo lang('App.skills_work') ?></li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <span class="flex"><span class="mr-1"><?php include("../public/icons/flame.svg") ?></span>CodeIgniter</span>
                        <ul class="pl-4 list-inside list-disc">
                            <li><?php echo lang('App.skills_school_personal') ?></li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-npm.svg") ?></span>NodeJS</span>
                        <ul class="pl-4 list-inside list-disc">
                            <li><?php echo lang('App.skills_school_personal') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="grow bg-yellow-500 dark:bg-opacity-80 rounded p-4 text-white">
                <h2 class="text-xl text-center">Web front-end</h2>
                <ul class="w-fit mx-auto">
                    <li class="mb-2">
                        <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-html5.svg") ?></span><?php echo lang('App.skills_html_css_js') ?></span>
                        <ul class="pl-4 list-inside list-disc">
                            <li><?php echo lang('App.skills_work_school_personal') ?></li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-bootstrap.svg") ?></span>Bootstrap</span>
                        <ul class="pl-4 list-inside list-disc">
                            <li><?php echo lang('App.skills_work_school') ?></li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-vue.svg") ?></span>VueJS</span>
                        <ul class="pl-4 list-inside list-disc">
                            <li><?php echo lang('App.skills_personal') ?></li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-tailwind.svg") ?></span>TailwindCSS</span>
                        <ul class="pl-4 list-inside list-disc">
                            <li><?php echo lang('App.skills_personal') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="bg-red-600 dark:bg-opacity-75 rounded p-4 col-span-2 text-white">
                <h2 class="text-xl text-center"><?php echo lang('App.skills_others') ?></h2>
                <div class="w-fit mx-auto md:grid md:grid-cols-2 md:gap-8 md:mx-0 md:w-full">
                    <ul class="mx-auto md:pr-4">
                        <li class="mb-2">
                            <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-git.svg") ?></span>GIT</span>
                            <ul class="pl-4 list-inside list-disc">
                                <li><?php echo lang('App.skills_work_school_personal') ?></li>
                            </ul>
                        </li>
                        <li class="mb-2">
                            <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-flutter.svg") ?></span>Flutter</span>
                            <ul class="pl-4 list-inside list-disc">
                                <li><?php echo lang('App.skills_work_personal') ?></li>
                            </ul>
                        </li>
                        <li class="mb-2">
                            <span class="flex"><span class="mr-1"><?php include("../public/icons/database.svg") ?></span><?php echo lang('App.skills_database') ?></span>
                            <ul class="pl-4 list-inside list-disc">
                                <li><?php echo lang('App.skills_work_school') ?></li>
                            </ul>
                        </li>
                        <li class="mb-2">
                            <span class="flex"><span class=""><?php include("../public/icons/brand-android.svg") ?></span><?php echo lang('App.skills_native_android') ?></span>
                            <ul class="pl-4 list-inside list-disc">
                                <li><?php echo lang('App.skills_work_school') ?></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="mx-auto md:pl-4">
                        <li class="mb-2">
                            <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-debian.svg") ?></span>Linux</span>
                            <ul class="pl-4 list-inside list-disc">
                                <li><?php echo lang('App.skills_work_school_personal') ?></li>
                            </ul>
                        </li>
                        <li class="mb-2">
                            <span class="flex"><span class="mr-1"><?php include("../public/icons/coffee.svg") ?></span>Java</span>
                            <ul class="pl-4 list-inside list-disc">
                                <li><?php echo lang('App.skills_school_personal') ?></li>
                            </ul>
                        </li>
                        <li class="mb-2">
                            <span class="flex"><span class="mr-1"><?php include("../public/icons/brand-python.svg") ?></span>Python</span>
                            <ul class="pl-4 list-inside list-disc">
                                <li><?php echo lang('App.skills_school') ?></li>
                            </ul>
                        </li>
                        <li class="mb-2">
                            <span class="flex"><span class="mr-1"><?php include("../public/icons/settings.svg") ?></span>Rust</span>
                            <ul class="pl-4 list-inside list-disc">
                                <li><?php echo lang('App.skills_personal') ?></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="bg-gray-700 p-4 rounded-t text-white">
    <span class="flex mx-auto w-fit">
        Copyright
        <?php
        include("../public/icons/copyright.svg");
        echo date('Y');
        ?>
        <?php echo lang('App.footer_rights') ?>
        </span>
</footer>
</body>
</html>
