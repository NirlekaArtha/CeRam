// Profile picture has an ID of preview-image to reuse the input-file-handler.js's function
// IK its not the best idea but i just want it to be done
const profilePicture = document.getElementById("preview-image");
const deleteButton = document.getElementById("delete-button");

function deleteProfilePicture ()
{
    profilePicture.src = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png";
}

deleteButton.addEventListener("click", deleteProfilePicture)
