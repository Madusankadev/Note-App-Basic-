<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="icon" href="./icons/logo.png">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="leftBar">
                <img src="./icons/logo.png" alt="logo" class="logo" width="60" height="60">

                <div class="mainControlsIcon">
                    <img src="./icons/catogery.png" alt="" class="icon notes" width="40" height="40">
                    <img src="./icons/pencil.png" alt="" class="icon edit" width="40" height="40">
                    <img src="./icons/darrow.png" alt="" class="icon catogery" width="40" height="40">
                </div>

                <img src="./icons/user.png" alt="profile" class="profile" width="48" height="48">
            </div>
            <div class="middleBar">
                <div class="noteTitleSection">
                    <img src="./icons/pencil.png" alt="pencil" width="32" height="32" >
                    <input type="text" class="noteTitle" placeholder="Add title">
                    <img src="./icons/close.png" alt="close" class="close" width="30" height="30">
                </div>

                <div class="noteBox">
                    <textarea name="noteContent" id="noteContent" cols="30" rows="10" class="noteContent" placeholder="Note here"></textarea>
                </div>

                <select name="catogeryOpt" id="catogeryOpt" class="catogeryOpt" aria-placeholder="Add Category">
                    <option value="">Add Category</option>
                    <option value="">News</option>
                    <option value="">Home</option>
                </select>
            </div>
            <div class="rightBar">
                <div>
                    <img src="./icons/add.png" alt="add" width="40" height="40" class="icon">
                </div>
                <div>
                    <img src="./icons/send.png" alt="" width="40" height="40" class="icon">
                </div>
            </div>
        </div>
    </div>
</body>
</html>