const calculateBtn = document.getElementById('calculateBtn');
const weightInput  = document.getElementById('weightInput');
const heightInput  = document.getElementById('heightInput');
const result       = document.getElementById('result');

calculateBtn.addEventListener('click', () => {
    const weight = parseFloat(weightInput.value);
    const height = parseFloat(heightInput.value);

    if(weight && height) {
        const bmi = weight / (height * height);
        result.innerHTML = `Your BMI is ${bmi.toFixed(2)}`;
    } else {
        alert("Please fill two files");
    }
});