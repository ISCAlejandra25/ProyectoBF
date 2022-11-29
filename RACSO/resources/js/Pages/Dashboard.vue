<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Head title="Sotelo Index" />

  <AuthenticatedLayout>
    <div class="ml-10 ">

    </div>
    <template #header>
      <h2 class="font-semibold  text-xl text-gray-800 leading-tight" >Sotelo                        "RACSO"</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-2 text-gray-50">
            <v-container fluid>
              <img src="./s.jpg" alt="Sotelo" style="width:30%" class="mx-auto d-block" />
            </v-container>
          </div>

        </div>
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    @RACSO
                </div>
      </div>

    </div>

  </AuthenticatedLayout>
</template>
