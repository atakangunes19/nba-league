<template>
    <header id="page-header">
        <div class="header-2">
            <nav class="bg-white py-2 md:py-4">
                <div class="container px-4 mx-auto md:flex md:items-center">
                    <div class="flex justify-between items-center">
                        <router-link to="/" class="group inline-flex items-center space-x-2">
                            <img src="../../assets/images/nba-logo.jpg" alt="Product" :class="{ 'h-12': true, hover:'h-full' }" />
                        </router-link>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</template>
