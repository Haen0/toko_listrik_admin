function updateCharacterCount() {
    var input = document.getElementById('textInput').value;
    var charCount = input.length;
    document.getElementById('charCount').innerText = charCount + '/1000';
}

