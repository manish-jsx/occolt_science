const letterValues = {
    'A': 1, 'B': 2, 'C': 3, 'D': 4, 'E': 5, 'U': 6, 'O': 7, 'F': 8,
    'I': 1, 'K': 2, 'G': 3, 'M': 4, 'H': 5, 'V': 6, 'Z': 7, 'P': 8, 
    'J': 1, 'R': 2, 'L': 3, 'T': 4, 'N': 5, 'W': 6,         
    'Q': 1, 'S': 3, 'X': 5,
    'Y': 1,
};

function calculateNumerology() {
    const name = document.getElementById('name').value.toUpperCase();
    let numerologyNumber = 0;

    for (let i = 0; i < name.length; i++) {
        const char = name.charAt(i);
        if (char in letterValues) {
            numerologyNumber += letterValues[char];
        }
    }

    // Display both two-digit and one-digit numerology numbers before adding
    document.getElementById('twoDigitResult').textContent = 'Total Calculation: ' +numerologyNumber;

    if (numerologyNumber>100) {
        let endDigitResult; 

        endDigitResult  = addDigits(numerologyNumber);

        document.getElementById('twoDigitResult').textContent = 'Total Calculation: ' + numerologyNumber +"  =  " + endDigitResult; 
        let description = "";

        switch (endDigitResult) {
            case 1:
                description = "Excellent";
                break;
            case 2:
                description = "ok";
                break;
            case 3:
                description = "Very good";
                break;
            case 4:
                description = "x";
                break;
    
            case 5:
                description = "Excellent";
                break;
    
            case 6:
                description = "Excellent";
                break;
            case 7:
                description = "ok/ Good for Company";
                break;
            case 8:
                description = "xx";
                break;
            case 9:
                description = "Avoid / ok";
                break;
    
            case 10:
                description = "Very Good";
                break;
            case 11:
                description = "X";
                break;
            case 12:
                description = "ok";
                break;
            case 13:
                description = "x";
                break;
            case 14:
                description = "Avoid";
                break;
    
            case 15:
                description = "Good";
                break;
    
            case 16:
                description = "ok / Good for Company";
                break;
            case 17:
                description = "Avoid / ok";
                break;
            case 18:
                description = "xx";
                break;
            case 19:
                description = "Good";
                break;
    
            case 20:
                description = "ok";
                break;
    
            case 21:
                description = "Very Good";
                break;
             case 22:
                description = "xx";
                break;
            case 23:
                description = "Very Good";
                break;
            case 24:
                description = "ok / Good";
                break;
    
            case 25:
                description = "ok / Good for Company";
                break;
    
            case 26:
                description = "X";
                break;
            case 27:
                description = "Good";
                break;
            case 28:
                description = "X / Good for Company ";
                break;
            case 29:
                description = "X";
                break;
    
            case 30:
                description = "ok";
                break;
            case 31:
                description = "XX";
                break;
            case 32:
                description = "Good";
                break;
            case 33:
                description = "Very Good";
                break;
            case 34:
                description = "X";
                break;
    
            case 35:
                description = "XX";
                break;
    
            case 36:
                description = "ok";
                break;
            case 37:
                description = "Excellent";
                break;
            case 38:
                description = "XX";
                break;
            case 39:
                description = "Good";
                break;
        
            case 40:
                description = "XX";
                break;
    
            case 41:
                description = "ok / good";
                break;
            case 42:
                description = "Avoid";
                break;
            case 43:
                description = "XX Good for Company";
                break;
            case 44:
                description = "XXX";
                break;
    
            case 45:
                description = "ok/ Good";
                break;
    
            case 46:
                description = "ok/ Good";
                break;
            case 47:
                description = "xx";
                break;
            case 48:
                description = "x";
                break;
            case 49:
                description = "xx";
                break;
    
            case 50:
                description = "Good";
                break;
            case 51:
                description = "ok / Good";
                break;
            case 52:
                description = "XX";
                break;
            case 53:
                description = "ok";
                break;
            case 54:
                description = "Avoid";
                break;
    
            case 55:
                description = "ok / Good";
                break;
    
            case 56:
                description = "Avoid";
                break;
            case 57:
                description = "Good";
                break;
            case 58:
                description = "ok";
                break;
            case 59:
                description = "OK";
                break;
    
            case 60:
                description = "ok";
                break;
    
            case 61:
                description = "ok / Avoid";
                break;
            case 62:
                description = "ok";
                break;
            case 63:
                description = "ok / Avoid";
                break;
            case 64:
                description = "Avoid/X";
                break;
    
            case 65:
                description = "OK";
                break;
    
            case 66:
                description = "Good";
                break;
            case 67:
                description = "ok";
                break;
            case 68:
                description = "X";
                break;
            case 69:
                description = "Very Good";
                break;
    
            case 70:
                description = "Ok / Good";
                break;
            case 71:
                description = "XAvoid / OK";
                break;
            case 72:
                description = "Avoid";
                break;
            case 73:
                description = "Excellent";
                break;
            case 74:
                description = "Avoid";
                break;
    
            case 75:
                description = "X";
                break;
    
            case 76:
                description = "Avoid";
                break;
            case 77:
                description = "Avoid";
                break;
            case 78:
                description = "Avoid";
                break;
            case 79:
                description = "Ok";
                break;
    
            case 80:
                description = "XX";
                break;
            case 81:
                description = "Avoid";
                break;
            case 82:
                description = "X";
                break;
            case 83:
                description = "Ok";
                break;
            case 84:
                description = "OK";
                break;
    
            case 85:
                description = "XX";
                break;
    
            case 86:
                description = "Avoid";
                break;
            case 87:
                description = "ok";
                break;
            case 88:
                description = "X";
                break;
            case 89:
                description = "XX";
                break;
    
            case 90:
                description = "OK";
                break;
            case 91:
                description = "Very Good";
                break;
            case 92:
                description = "XX";
                break;
            case 93:
                description = "Very Good";
                break;
            case 94:
                description = "XX";
                break;
    
            case 95:
                description = "OK";
                break;
    
            case 96:
                description = "Good";
                break;
            case 97:
                description = "X";
                break;
            case 98:
                description = "XX";
                break;
            case 99:
                description = "Avoid";
                break;
    
            case 100:
                description = "Very Good";
                break;
    
           
                
    
            // Add more cases for other numerology numbers and their descriptions as needed
            default:
                description = "Your Name is too Long";
        }
    
        document.getElementById('description').textContent = `Grade: ${description}`;
    } else {
        let description = "";

        switch (numerologyNumber) {
            case 1:
                description = "Excellent";
                break;
            case 2:
                description = "ok";
                break;
            case 3:
                description = "Very good";
                break;
            case 4:
                description = "x";
                break;
    
            case 5:
                description = "Excellent";
                break;
    
            case 6:
                description = "Excellent";
                break;
            case 7:
                description = "ok/ Good for Company";
                break;
            case 8:
                description = "xx";
                break;
            case 9:
                description = "Avoid / ok";
                break;
    
            case 10:
                description = "Very Good";
                break;
            case 11:
                description = "X";
                break;
            case 12:
                description = "ok";
                break;
            case 13:
                description = "x";
                break;
            case 14:
                description = "Avoid";
                break;
    
            case 15:
                description = "Good";
                break;
    
            case 16:
                description = "ok / Good for Company";
                break;
            case 17:
                description = "Avoid / ok";
                break;
            case 18:
                description = "xx";
                break;
            case 19:
                description = "Good";
                break;
    
            case 20:
                description = "ok";
                break;
    
            case 21:
                description = "Very Good";
                break;
             case 22:
                description = "xx";
                break;
            case 23:
                description = "Very Good";
                break;
            case 24:
                description = "ok / Good";
                break;
    
            case 25:
                description = "ok / Good for Company";
                break;
    
            case 26:
                description = "X";
                break;
            case 27:
                description = "Good";
                break;
            case 28:
                description = "X / Good for Company ";
                break;
            case 29:
                description = "X";
                break;
    
            case 30:
                description = "ok";
                break;
            case 31:
                description = "XX";
                break;
            case 32:
                description = "Good";
                break;
            case 33:
                description = "Very Good";
                break;
            case 34:
                description = "X";
                break;
    
            case 35:
                description = "XX";
                break;
    
            case 36:
                description = "ok";
                break;
            case 37:
                description = "Excellent";
                break;
            case 38:
                description = "XX";
                break;
            case 39:
                description = "Good";
                break;
        
            case 40:
                description = "XX";
                break;
    
            case 41:
                description = "ok / good";
                break;
            case 42:
                description = "Avoid";
                break;
            case 43:
                description = "XX Good for Company";
                break;
            case 44:
                description = "XXX";
                break;
    
            case 45:
                description = "ok/ Good";
                break;
    
            case 46:
                description = "ok/ Good";
                break;
            case 47:
                description = "xx";
                break;
            case 48:
                description = "x";
                break;
            case 49:
                description = "xx";
                break;
    
            case 50:
                description = "Good";
                break;
            case 51:
                description = "ok / Good";
                break;
            case 52:
                description = "XX";
                break;
            case 53:
                description = "ok";
                break;
            case 54:
                description = "Avoid";
                break;
    
            case 55:
                description = "ok / Good";
                break;
    
            case 56:
                description = "Avoid";
                break;
            case 57:
                description = "Good";
                break;
            case 58:
                description = "ok";
                break;
            case 59:
                description = "OK";
                break;
    
            case 60:
                description = "ok";
                break;
    
            case 61:
                description = "ok / Avoid";
                break;
            case 62:
                description = "ok";
                break;
            case 63:
                description = "ok / Avoid";
                break;
            case 64:
                description = "Avoid/X";
                break;
    
            case 65:
                description = "OK";
                break;
    
            case 66:
                description = "Good";
                break;
            case 67:
                description = "ok";
                break;
            case 68:
                description = "X";
                break;
            case 69:
                description = "Very Good";
                break;
    
            case 70:
                description = "Ok / Good";
                break;
            case 71:
                description = "XAvoid / OK";
                break;
            case 72:
                description = "Avoid";
                break;
            case 73:
                description = "Excellent";
                break;
            case 74:
                description = "Avoid";
                break;
    
            case 75:
                description = "X";
                break;
    
            case 76:
                description = "Avoid";
                break;
            case 77:
                description = "Avoid";
                break;
            case 78:
                description = "Avoid";
                break;
            case 79:
                description = "Ok";
                break;
    
            case 80:
                description = "XX";
                break;
            case 81:
                description = "Avoid";
                break;
            case 82:
                description = "X";
                break;
            case 83:
                description = "Ok";
                break;
            case 84:
                description = "OK";
                break;
    
            case 85:
                description = "XX";
                break;
    
            case 86:
                description = "Avoid";
                break;
            case 87:
                description = "ok";
                break;
            case 88:
                description = "X";
                break;
            case 89:
                description = "XX";
                break;
    
            case 90:
                description = "OK";
                break;
            case 91:
                description = "Very Good";
                break;
            case 92:
                description = "XX";
                break;
            case 93:
                description = "Very Good";
                break;
            case 94:
                description = "XX";
                break;
    
            case 95:
                description = "OK";
                break;
    
            case 96:
                description = "Good";
                break;
            case 97:
                description = "X";
                break;
            case 98:
                description = "XX";
                break;
            case 99:
                description = "Avoid";
                break;
    
            case 100:
                description = "Very Good";
                break;
    
           
                
    
            // Add more cases for other numerology numbers and their descriptions as needed
            default:
                description = "Your Name is too Long";
        }
    
        document.getElementById('description').textContent = `Grade: ${description}`;
    }
 

   
}

function addDigits(number) {
    let sum = 0;
    while (number > 0) {
        sum += number % 10;
        number = Math.floor(number / 10);
    }
    return sum;
}




