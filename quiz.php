<?php
$path = "./";
$page = "Quiz";
include $path."assets/inc/header.php";
?>
<div class="container">
    <h1>Final Quiz for testing your knownledge in Unix/Linux</h1>
    <div id="page-wrap">
        <form action="grade.php" method="post" id="quiz">
            <ol>
                <li>
                    <h3>What is Linux? </h3>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) A paid operating system </label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) A free and open source operating system</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) A closed source operating system</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) A software development tool</label>
                    </div>
                </li>
                <li>
                    <h3>What is the kernel in Linux? </h3>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) A user-level application</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) A hardware component</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) A graphical user interface</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) The heart of the operating system</label>
                    </div>
                </li>
                <li>
                    <h3>What is the responsibility of the kernel in Linux? </h3>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Managing user-level applications</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Managing system-connected devices</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Keeping track of memory used by applications</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) All of the above</label>
                    </div>
                </li>
                <li>
                    <h3>What is the GNU General Public License?</h3>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) A license that allows anyone to modify and redistribute the
                            source code of Linux </label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) A commercial license for Linux distributions </label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) A license that restricts the use of Linux to non-commercial
                            purposes only </label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) A license that only allows the use of Linux on a single
                            computer</label>
                    </div>
                </li>
                <li>
                    <h3>Who developed Unix? </h3>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Microsoft</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Apple</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Bell Labs</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) IBM</label>
                    </div>
                </li>
            </ol>
            <input class="btn-gray" type="submit" value="Submit Quiz" />
        </form>
    </div>
</div>

<script>
const submitButton = document.getElementById("submit-button");
const radioInputs = document.querySelectorAll("input[type=radio]");

submitButton.addEventListener("click", (event) => {
    let allSelected = true;
    radioInputs.forEach((input) => {
        if (!input.checked) {
            allSelected = false;
        }
    });

    if (!allSelected) {
        event.preventDefault();
        alert("Please select an answer for all questions.");
    }
});
</script>
<?php

// PHP code to check the answer and display the next question
if(isset($_POST['submit'])) {
    $score = 0;
    $q1_answer = "b";
    if($_POST['q1'] == $q1_answer) {
        $score++;
    }
    // Display next question and answer options
    // ...
}
?>

<?php
include $path."assets/inc/footer.php";
?>