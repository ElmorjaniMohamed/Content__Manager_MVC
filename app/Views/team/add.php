<form action="team/add" method="post">
                <div>
                    <div>
                        <div class="flex justify-center pt-4">
                            <button
                                class="modal-open ml-2 px-4 py-2 font-medium text-white bg-lime-500 rounded-md hover:bg-lime-600 focus:outline-none focus:shadow-outline-red active:bg-lime-600 transition duration-150 ease-in-out">Add
                                Teams</button>

                            <!--Modal-->
                            <div
                                class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                                <div
                                    class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                                    <div
                                        class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg"
                                            width="18" height="18" viewBox="0 0 18 18">
                                            <path
                                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                            </path>
                                        </svg>
                                    </div>

                                    <!-- Add margin if you want to see some of the overlay behind the modal-->
                                    <div class="modal-content py-4 text-left px-6">
                                        <!--Title-->
                                        <div class="flex justify-between items-center pb-3">
                                            <p class="text-2xl text-center text-mainBlue font-bold">Add Your Teams</p>
                                            <div class="modal-close cursor-pointer z-50">
                                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                                                    width="18" height="18" viewBox="0 0 18 18">
                                                    <path
                                                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>

                                        <!--Body-->
                                        <label for="name" class="text-gray-800 text-sm font-bold">Name</label>
                                        <input id="name" name="name"
                                            class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                            placeholder="Enter team name" />

                                        <label for="country"
                                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Country</label>
                                        <input id="country" name="country"
                                            class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                            placeholder="Enter country" />

                                        <label for="city"
                                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">City</label>
                                        <input id="city" name="city"
                                            class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                            placeholder="Enter city" />

                                        <label for="coachName"
                                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Coach</label>
                                        <input id="coachName" name="coach_name"
                                            class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                            placeholder="Enter coach name" />

                                        <label for="foundationYear"
                                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Foundation
                                            Year</label>
                                        <input id="foundationYear" name="foundation_year"
                                            class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                            placeholder="Enter foundation year" />

                                        <label for="totalPlayers"
                                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Total
                                            Players</label>
                                        <input id="totalPlayers" name="total_players"
                                            class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                            placeholder="Enter total players" />

                                        <!--Footer-->
                                        <div class="flex justify-end pt-2">
                                            <button name="submit" type="submit"
                                                class="px-4  bg-green-600 p-2 rounded-lg text-slate-100 hover:bg-green-700  mr-2">Submit</button>
                                            <button
                                                class="modal-close px-4 bg-red-400 p-2 rounded-lg text-white hover:bg-red-500">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>