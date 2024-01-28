function enroll() {
  fetch('enroll.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: 'clubName=YourClubName'
  })
  .then(response => response.text())
  .then(data => {
    if (data === 'You have been enrolled in the club') {
      document.getElementById('enrollButton').disabled = true;
    }
  });
}
