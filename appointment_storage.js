function saveAppointments() {
    // Get form inputs
    let fullName = document.getElementById('name1').value;
    let hospitalRecordID = document.getElementById('hospitalrec').value;
    let phoneNumber = document.getElementById('phone').value;
    let appointment_d = document.getElementById('appointment_d').value;
    let appointment_time = document.getElementById('appointment_time').value;
    let reason = document.getElementById('reason').value;

    // Create appointment object
    let appointment = {
        fullName: fullName,
        hospitalRecordID: hospitalRecordID,
        phoneNumber: phoneNumber,
        appointment_d: appointment_d,
        appointment_time: appointment_time,
        reason: reason
    };

    // Store appointment data
    sessionStorage.setItem('lastAppointment', JSON.stringify(appointment));

    // Display values
    let displayContainer = document.getElementById('display-container');
    displayContainer.innerHTML = `
        <h3>Last Appointment Details:</h3><br>
        <strong>Full Name:</strong> ${fullName}<br><br>
        <strong>Hospital Record ID:</strong> ${hospitalRecordID}<br><br>
        <strong>Phone Number:</strong> ${phoneNumber}<br><br>
        <strong>Date of Appointment:</strong> ${appointment_d}<br><br>
        <strong>Time of Appointment:</strong> ${appointment_time}<br><br>
        <strong>Reason for Appointment:</strong> ${reason}<br><br>
    `;
}