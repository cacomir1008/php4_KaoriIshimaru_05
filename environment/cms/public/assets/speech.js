let recognition = new webkitSpeechRecognition();
    recognition.onresult = function(event){
        if(event.results.length>0){
            itemProblem.value = event.results[0][0].transcript;
        }
    }