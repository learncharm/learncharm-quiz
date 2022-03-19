<div class="fixed top-0 left-0 h-screen w-16 m-0 inline-block align-top bg-gray-900 text-white shadow-lg">
    <ul>
        <!-- logo -->
        <li><a href="../" data-tooltip-target="tooltip-logo" data-tooltip-placement="right"><img src="../images/logo/logo.png" class="fas fa-plus relative flex items-center justify-center h-12 w-12 mt-2 mb-2 p-2 mx-auto bg-gray-700 text-green-400 transition-all duration-200 ease-linear cursor-pointer rounded-3xl hover:bg-green-400 hover:text-white hover:rounded-xl"></img></a></li>
        <span id="tooltip-logo" role="tooltip" class="inline-block absolute invisible z-40 py-2 px-3 m-4 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">Go to Home
            <div class="tooltip-arrow" data-popper-arrow></div>
        </span>
        <hr class="w-12 relative left-2 border-green-400">

        <!-- create-quiz -->
        <li><a href="#" data-tooltip-target="tooltip-right" data-tooltip-placement="right"><i class="fas fa-plus relative flex items-center justify-center h-12 w-12 mt-2 mb-2 mx-auto bg-gray-700 text-green-400 transition-all duration-200 ease-linear cursor-pointer rounded-3xl hover:bg-green-400 hover:text-white hover:rounded-xl" id="createQuiz"></i></a></li>
        <span id="tooltip-right" role="tooltip" class="inline-block absolute invisible py-2 px-3 z-10 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">Create Quiz
            <div class="tooltip-arrow" data-popper-arrow></div>
        </span>
        <!-- icon 2 -->
        <li><a href="#" data-tooltip-target="tooltip-all-quiz" data-tooltip-placement="right"><i class="fas fa-chalkboard-user relative flex items-center justify-center h-12 w-12 mt-2 mb-2 mx-auto bg-gray-700 text-green-400 transition-all duration-200 ease-linear cursor-pointer rounded-3xl hover:bg-green-400 hover:text-white hover:rounded-xl" id="icon1"></i></a></li>
        <span id="tooltip-all-quiz" role="tooltip" class="inline-block absolute invisible py-2 px-3 z-10 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">All Quiz
            <div class="tooltip-arrow" data-popper-arrow></div>
        </span>
        <hr class="w-12 relative left-2 border-green-400">

        <!-- icon 3-->
        <li><a href="#" data-tooltip-target="tooltip-create-group" data-tooltip-placement="right"><i class="fas fa-folder-plus relative flex items-center justify-center h-12 w-12 mt-2 mb-2 mx-auto bg-gray-700 text-green-400 transition-all duration-200 ease-linear cursor-pointer rounded-3xl hover:bg-green-400 hover:text-white hover:rounded-xl" id="icon1"></i></a></li>
        <span id="tooltip-create-group" role="tooltip" class="inline-block absolute invisible py-2 px-3 z-10 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">Create Group
            <div class="tooltip-arrow" data-popper-arrow></div>
        </span>

        <!-- icon 3-->
        <li><a href="#" data-tooltip-target="tooltip-group" data-tooltip-placement="right"><i class="fa-solid fa-folder relative flex items-center justify-center h-12 w-12 mt-2 mb-2 mx-auto bg-gray-700 text-green-400 transition-all duration-200 ease-linear cursor-pointer rounded-3xl hover:bg-green-400 hover:text-white hover:rounded-xl" id="icon1"></i></a></li>
        <span id="tooltip-group" role="tooltip" class="inline-block absolute invisible py-2 px-3 z-10 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">5th Class
            <div class="tooltip-arrow" data-popper-arrow></div>
        </span>
    </ul>

</div>

<!-- modal -->
<!-- create-quiz -->
<div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="createQuizModal">
    <!--modal content-->
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
    <i class="fas fa-close p-2 bg-green-300 rounded cursor-pointer" id="closeModal"></i>
        <div class="mt-3 text-center">
            <h1 class="text-green-600 font-bold text-2xl">Create Quiz</h1>
            <form action="" method="post">
                <input type="text" class="rounded-full border-green-500 my-3  outline-none  focus:border-green-500" placeholder="Enter Quiz Name">

                <div class="items-center px-4 py-3">
                    <input type="submit" value="Create" id="ok-btn" class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 cursor-pointer">


            </form>
        </div>
    </div>
</div>

</div>
<script>
    let  createQuizModal = document.getElementById("createQuizModal");

    let createQuiz = document.getElementById("createQuiz");

    let closeMdoal = document.getElementById("closeMdoal");

    createQuiz.onclick = function() {
        createQuizModal.style.display = "block";
    }
    // We want the modal to close when the OK button is clicked
closeMdoal.addEventListener("click", function(){
            createQuizModal.style.display = "none";
})
    window.onclick = function(event1) {
        if (event1.target == createQuizModal) {
            createQuizModal.style.display = "none";
        }
    }
</script>