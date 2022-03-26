<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Alpine Toolbox - Example - Responsive Navbar</title>
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"
      defer
    ></script>
  </head>

  <body class="bg-gray-300">

    <nav
      class="flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0"
      x-data="{ isOpen: false }"
      @keydown.escape="isOpen = false"
      :class="{ 'shadow-lg bg-indigo-900' : isOpen , 'bg-gray-900' : !isOpen}"
    >


    <div class="flex items-center text-white ">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search-post', [])->html();
} elseif ($_instance->childHasBeenRendered('L1WtqNY')) {
    $componentId = $_instance->getRenderedChildComponentId('L1WtqNY');
    $componentTag = $_instance->getRenderedChildComponentTagName('L1WtqNY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('L1WtqNY');
} else {
    $response = \Livewire\Livewire::mount('search-post', []);
    $html = $response->html();
    $_instance->logRenderedChild('L1WtqNY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>


    
      <!--Logo etc-->
      <div class="flex text-white pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center ml-12">
        <a
          class="text-white no-underline hover:text-white hover:no-underline"
          href="#"
        >
          <span class="text-2xl pl-2"
            ><i class="em em-grinning"></i> Armin RMT</span
          >
        </a>
      </div>

      <!--Toggle button (hidden on large screens)-->
      <button
        @click="isOpen = !isOpen"
        type="button"
        class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white"
        :class="{ 'transition transform-180': isOpen }"
      >
        <svg
          class="h-6 w-6 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
        >
          <path
            x-show="isOpen"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
          />
          <path
            x-show="!isOpen"
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
          />
        </svg>
      </button>

      <!--Menu-->
      <div
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
      >
        <ul
          class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center"
        >
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4 text-white no-underline"
              href="<?php echo e(url("/")); ?>"
              @click="isOpen = false"
              >Home
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
              href="#"
              @click="isOpen = false"
              >News
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
              href="#"
              @click="isOpen = false"
              >Contact
            </a>
          </li>
          <li class="mr-3">
          <?php if(auth()->guard()->check()): ?>
            <a
              class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
              href="<?php echo e(route('dashboard')); ?>"
              @click="isOpen = false"
              >Profile
            </a>
          <?php else: ?>
          <a
              class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
              href="<?php echo e(route('login')); ?>"
              @click="isOpen = false"
              >Login
            </a>
          <?php endif; ?>
          </li>
        </ul>
      </div>
    </nav>

    <!--Container for content-->
    <div class="container shadow-lg mx-auto bg-white mt-24 md:mt-18"></div>
  </body>
</html><?php /**PATH D:\blogg\laravelblog\resources\views/components/navbar.blade.php ENDPATH**/ ?>