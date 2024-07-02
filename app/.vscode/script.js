const questions = [
    {
        questions: "Which animal below is a reptile?",
        answers: [
            { text:"Shark", correct: false},
            { text:"Elephant", correct: false},
            { text:"Girafe", correct: false},
            { text:"lizard", correct: true},
        ]
    }, 
    {
        questions: "Which country below is the city Johannesburg located?",
        answers: [
            { text: "SouthAfrica", correct: true},
            { text: "Bhutan", correct: false},
            { text: " Nepal", correct: false},
            { text: "Shri Lanka", correct: false},
        ]
    },
    {
        questions: "Which is the largest desert in the world?",
        answers: [
            { text: "Kalahari", correct: false},
            { text: "Gobi", correct: false},
            { text: "Sahara", correct: false},
            { text: "Antarctica",correct: true},
        ]
    },
    {
        questions: "Which is the smallest continent in the world?",
        answers: [
            { text: "Asia", correct: false},
            { text: "Australia", correct: true},
            { text: "Arctic", correct: false},
            { text: "Africa", correct: false},
        ]
    }
];

const questionsElement = document.getElementById("question");
const answerButton = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionsIndex = 0;
let score = 0;

function startQuiz(){
    currentQuestionsIndex = 0;
    score = 0;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionsIndex];
    let questionNo = currentQuestionIndex +1;
    questionsElement.innerHTML = questionNo + ". " + currentQuestion.question;

    currentQuestions.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if(answer.correct){
            button.dataset.correct = answer.correct;
        }
        button.addEventListener("click", selectAnswer);
    });
}

function resetState(){
    nextButton.style.display = "none"
    while(answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}
function selectAnswer(e){
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.correct === "true";
    if(isCorrect){
        selectedBtn.classList.add("correct");
    }else{
        selectedBtn.classList.add("incorrect");
        score++;
    }
    Array.from(answerButttons.children).forEach(button => {
        if(button.dataset.correct === "true"){
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display = "block";
}

function showScore(){
    resetState();
    questionElement.innerHTML ='score aquired ${score} out of ${questions.length}!';
    nextButton.innerHTML = "Go Again";
    nextButton.style.display = "block"
}
function handleNextButton(){
    currentQuestionsIndex++;
    if(currentQuestionsIndex < question.length){
        showQuestion();
    }else{
        showScore();
    }
}

nextButton.addEventListener("click", ()=>{
    if(currentQuestionsIndex < questions.length){
        handleNextButton();
    }else{
        startQuiz();
    }
});
