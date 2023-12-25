<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ruslan+Display&display=swap" rel="stylesheet">
    <title>stadiumstream</title>
</head>

<body>

    <form action="team/edit" method="post">
        <div>
            <div>
                <div class="flex justify-center pt-4">
                    <!--Modal-->
                    <div
                        class="fixed w-full h-full top-0 left-0 flex items-center justify-center">
                        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                        <div
                            class=" bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                            <!-- Add margin if you want to see some of the overlay behind the modal-->
                            <div class="modal-content py-4 text-left px-6">
                                <!--Title-->
                                <div class="flex justify-between items-center pb-3">
                                    <p class="text-2xl text-center text-mainBlue font-bold">Edit Your Teams</p>
                                </div>

                                <!--Body-->
                                <label for="name" class="text-gray-800 text-sm font-bold">Name</label>
                                <input id="name" name="name"
                                    value="<?= isset($existingTeam['name']) ? htmlspecialchars($existingTeam['name']) : '' ?>"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Enter team name" />

                                <label for="country"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Country</label>
                                <input id="country" name="country"
                                    value="<?= isset($existingTeam['country']) ? htmlspecialchars($existingTeam['country']) : '' ?>"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Enter country" />

                                <label for="city"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">City</label>
                                <input id="city" name="city" value="<?= isset($existingTeam['city']) ? htmlspecialchars($existingTeam['city']) : '' ?>"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Enter city" />

                                <label for="coachName"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Coach</label>
                                <input id="coachName" name="coach_name" value="<?= isset($existingTeam['coach_name']) ? htmlspecialchars($existingTeam['coach_name']) : '' ?>"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Enter coach name" />

                                <label for="foundationYear"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Foundation
                                    Year</label>
                                <input id="foundationYear" name="foundation_year" value="<?= isset($existingTeam['foundation_year']) ? htmlspecialchars($existingTeam['foundation_year']) : '' ?>"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Enter foundation year" />

                                <label for="totalPlayers"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Total
                                    Players</label>
                                <input id="totalPlayers" name="total_players" value="<?= isset($existingTeam['total_players']) ? htmlspecialchars($existingTeam['total_players']) : '' ?>"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Enter total players" />

                                <!--Footer-->
                                <div class="flex items-center pt-2">
                                    <button name="submit" type="submit"
                                        class="px-4  bg-green-600 p-2 rounded-lg text-slate-100 hover:bg-green-700  mr-2">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>