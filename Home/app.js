document.getElementById('resultsForm').addEventListener('submit', function(e) {
    const indexNumber = document.getElementById('index_number').value;
    const registeredName = document.getElementById('registered_name').value;

    if (indexNumber === "" || registeredName === "") {
        e.preventDefault();
        alert("Please fill in all fields.");
    }
});
