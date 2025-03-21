// Get the email input field
const emailInput = document.getElementById("email");

// Initialize form values
document.addEventListener("DOMContentLoaded", () => {
    emailInput.value = getSavedValue("email"); // Load email if stored
});

// Add event listener to save input when typing
emailInput.addEventListener("input", saveValue);

// Save value function
function saveValue(e) {
    try {
        const id = e.target.id;
        const val = e.target.value;
        const timestamp = Date.now();
        const expiresAt = timestamp + 10 * 60 * 1000; // Expires in 10 minutes

        const data = JSON.stringify({ value: val, expiresAt });

        localStorage.setItem(id, data);
    } catch (error) {
        console.error("Error saving value:", error);
    }
}

// Get saved value function
function getSavedValue(key) {
    try {
        const data = localStorage.getItem(key);
        if (data) {
            const { value, expiresAt } = JSON.parse(data);
            const now = Date.now();

            if (now < expiresAt) {
                return value; // Return saved email if it's still valid
            } else {
                localStorage.removeItem(key); // Remove expired email
            }
        }
        return "";
    } catch (error) {
        console.error("Error getting saved value:", error);
        return "";
    }
}

// Clear the stored email after 10 minutes
setInterval(() => {
    getSavedValue("email"); // Check and remove if expired
}, 60 * 1000); // Check every 1 minute
