<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Tutorial Dasar - Laravel 12</title>
</head>

<body x-data class="h-full">

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('menuMobile', {
        shown: false,
        toggle() {
          this.shown = !this.shown
        }
      });
      Alpine.store('menuProfile', {
        shown: false,
        toggle() {
          this.shown = !this.shown
        }
      });
      Alpine.store('menuProfileMobile', {
        shown: false,
        toggle() {
          this.shown = !this.shown
        }
      });
    })
  </script>

  <div class="min-h-full">

    <x-navbar></x-navbar>

    <x-header>Home Page</x-header>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <div>Selamat Datang di Tutor Dasar Laravel 12</div>
      </div>
    </main>

  </div>

</body>

</html>