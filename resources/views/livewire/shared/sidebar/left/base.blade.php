<div
     class="flex h-screen w-1/12 min-w-20 flex-col items-end justify-between md:w-3/12 xl:w-4/12 sticky top-0">
    <section
             class="flex h-full min-w-20 flex-col justify-between px-2 py-4 md:px-4 lg:pl-32">
        <div class="flex min-w-12 flex-col items-center gap-8 md:items-start">
            <svg class="text-rose-400" xmlns="http://www.w3.org/2000/svg"
                 width="50" height="auto" viewBox="0 0 84.1 57.6">
                <title>laravel</title>
                <path fill="currentcolor"
                      d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z" />
            </svg>
            <ul class="w-full">
                <li class="flex cursor-pointer items-center justify-center gap-4 font-bold md:justify-start"
                    wire:click="redirectTo('/chirps')">
                    <svg class="text-rose-400" id="bird"
                         xmlns="http://www.w3.org/2000/svg" width="30"
                         viewBox="0 0 128 128">
                        <g data-name="Layer 2">
                            <path fill="currentcolor"
                                  d="M112 52s11.125-3.875 15.998-12c-6.371.875-13.666-.666-15.998-3.998V16a8 8 0 0 0-8-8H40.251s8-2.668 7.25-5c-.956-2.977-9.667.75-16.834 3.75 1.917-2.084 3.417-4.168 3.167-6.75-5.07 1.285-9.365 5.703-11.343 8.145-.027.005-.055.007-.082.013.594-1.154 2.06-4.117 1.675-5.658A14.557 14.557 0 0 0 16 16v76c0 8-8 12-16 4 4 12 12 16 24 16h13.674l-1.634 11.434a4 4 0 0 0 3.394 4.525 4.062 4.062 0 0 0 .57.041 4.003 4.003 0 0 0 3.956-3.436L45.755 112h27.122l3.242 12.969a4 4 0 0 0 7.762-1.94L81.123 112H104a8 8 0 0 0 8-8V64a19.436 19.436 0 0 0 16-8c-6.332-.334-16-4-16-4zM64 40a8 8 0 1 1 8 8 8 8 0 0 1-8-8z">
                            </path>
                        </g>
                    </svg>
                    <span class="hidden md:block">Dashboard</span>
                </li>
            </ul>
        </div>
        <div>
            <ul class="flex w-full flex-col gap-8">
                <!-- <li class="flex cursor-pointer items-center justify-center gap-4 font-bold md:justify-start" -->
                <!--     wire:click="redirectTo('/dashboard')"> -->
                <!--     <svg class="text-rose-400" id="bird" -->
                <!--          xmlns="http://www.w3.org/2000/svg" width="30" -->
                <!--          viewBox="0 0 128 128"> -->
                <!--         <g data-name="Layer 2"> -->
                <!--             <path fill="currentcolor" -->
                <!--                   d="M112 52s11.125-3.875 15.998-12c-6.371.875-13.666-.666-15.998-3.998V16a8 8 0 0 0-8-8H40.251s8-2.668 7.25-5c-.956-2.977-9.667.75-16.834 3.75 1.917-2.084 3.417-4.168 3.167-6.75-5.07 1.285-9.365 5.703-11.343 8.145-.027.005-.055.007-.082.013.594-1.154 2.06-4.117 1.675-5.658A14.557 14.557 0 0 0 16 16v76c0 8-8 12-16 4 4 12 12 16 24 16h13.674l-1.634 11.434a4 4 0 0 0 3.394 4.525 4.062 4.062 0 0 0 .57.041 4.003 4.003 0 0 0 3.956-3.436L45.755 112h27.122l3.242 12.969a4 4 0 0 0 7.762-1.94L81.123 112H104a8 8 0 0 0 8-8V64a19.436 19.436 0 0 0 16-8c-6.332-.334-16-4-16-4zM64 40a8 8 0 1 1 8 8 8 8 0 0 1-8-8z"> -->
                <!--             </path> -->
                <!--         </g> -->
                <!--     </svg> -->
                <!--     <span class="hidden md:block">Profile</span> -->
                </li>
                <li class="flex cursor-pointer items-center justify-center gap-4 font-bold md:justify-start"
                    wire:click="logout">
                    <svg class="text-rose-400" id="Capa_1" height="auto"
                         width="30" version="1.1"
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 384.971 384.971" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                           stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g id="Sign_Out">
                                    <path fill="currentcolor"
                                          d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03 C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03 C192.485,366.299,187.095,360.91,180.455,360.91z">
                                    </path>
                                    <path fill="currentcolor"
                                          d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279 c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179 c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z">
                                    </path>
                                </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                            </g>
                        </g>
                    </svg>
                    <span class="hidden md:block">Logout</span>
                </li>
            </ul>
        </div>
    </section>
</div>
