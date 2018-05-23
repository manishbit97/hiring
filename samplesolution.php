<?php
require_once 'config.php';
require_once 'components.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link type="text/css" rel="stylesheet" href="<?php echo SITE_URL ?>/css/bootstrap.css" media="screen" />
        <link type="text/css" rel="stylesheet" href="<?php echo SITE_URL ?>/css/style.css" media="screen" />
        <script type="text/javascript" src="<?php echo SITE_URL ?>/js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL ?>/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL ?>/js/plugin.js"></script>
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
        <script type="javascript"> var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
        } else {
        document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
        }
        </script>
<title>CropIn Hiring</title>
        <link rel='shortcut icon' href='<?php echo SITE_URL; ?>/img/favicon.png' />
    </head>
    <body>
            <nav class="navbar navbar-default " role="navigation">
                <div class="container">
                        <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <!--  <a class="navbar-brand" href="<?php /*echo SITE_URL; */?>">Aurora</a>-->
                    <a class="navbar-brand" style= "padding: 0;" href="<?php echo SITE_URL; ?>"><img src="<?php echo SITE_URL; ?>/img/cropin.jpg" style="display: inline-block;" width="170px" height="50px">
                        &nbsp;
                    </a>
                        </div>
                </div>
            </nav>

            <div class="container bodycont">
                <div class='row'>
                    <div class='col-md-12' id='mainbar'>
                        <center>
                            <h1> Sample Solutions </h1>
                        </center><br>
                        <table class="table table-striped"><tbody><tr><th>Table of Contents</th></tr></tbody></table>
                            <ol>
                                <li class="page-header">
                                    <a href="#Submitting_a_Solution_:">Submitting a Solution :</a>
                                </li>
                                <li class="page-header">
                                    <a href="#C_1">C</a>
                                </li>
                                <li class="page-header">
                                    <a href="#C">C++</a>
                                </li>
                                <li class="page-header">
                                    <a href="#Java">Java</a>
                                </li>
                                <li class="page-header">
                                    <a href="#Python">Python 3</a>
                                </li>
                                <li class="page-header">
                                    <a href="#Python2">Python 2</a>
                                </li>
                                <li class="page-header">
                                    <a href="#Javascript">Javascript</a>
                            </ol>
                    </div>
                </div>
                <table class="table table-striped"><tbody><th id="Submitting_a_Solution_:">Submitting a Solution :</th></tbody></table>
                <p>To submit a solution choose problem from list of problems and press button 'Submit' at the bottom of the problem page. You can submit multiple solutions to each problem. Score for the problem is equal to the score of the correct submitted solution.<br><br>To see the Statistic for problem choose problem from list of problems and press button 'My submissions' at the top of the problem description.<br><br>Solutions in different languages need to be structured in particular ways. For example, the public class in Java needs to be named as Main. Here are a few sample solutions in different languages for a very elementary problem statement,of how to take input .  </p><br><br><br>
                <table class="table table-striped"><tbody><th id="C_1"> C </th></tbody></table><br>
                <p>
                <pre class="prettyprint">

                        #include &lt;stdio.h&gt;
                        int main(void) {
                        int t,n,i,a[1000000];
                        scanf("%d",&t); //Taking input for T test cases.
                        while(t-- > 0) {
                                scanf("%d",&t);
                                //Take input for array similarly.

                                /* Code the program logic here */

                                printf("%d \n", var2);    //Output in this format.
                        }
                        return 0;
                        }
                    </pre>
                </p>
                <br id="C">
                <br>
                <table class="table table-striped"><tbody><th> C++ </th></tbody></table>
                <p>
                <pre class="prettyprint">

                        #include &lt;bits/stdc++.h&gt;
                        using namespace std;
                        int main() {
                        int t,n,i,a[1000000],var2;
                        cin>>t; //Taking input for T test cases.
                        while(t-- > 0) {
                                cin>>n;
                                //Take input for array similarly.

                                /* Code the program logic here */

                                cout<&lt;var2<&lt;endl;    //Output in this format or as specified in the problem
                        }
                        return 0;
                        }
                    </pre>
                </p>
                <br id="Java">
                <br>
                <table class="table table-striped"><tbody><th > Java </th></tbody></table>
                <p>
                <pre class="prettyprint">

                        import java.io.*;
                        import java.util.*;
                        public class Main
                            {
                            public static void main (String[] args) throws java.lang.Exception
                                {
                                    int t,n,i;
                                    Scanner in = new Scanner(System.in);
                                    t=in.nextInt();    //T test cases.
                                        while(t-- > 0) {
                                            n=in.nextInt();
                                            //Take input for array similarly.

                                            /* Code the program logic here */

                                             System.out.println(n);    //Output in this format or as specified in the problem
                                        }

                                 }
                            }
                    </pre>
                </p>
                <br>
                <br>
                <br id="Python">
                <br>
                <table class="table table-striped"><tbody><th > Python 3 </th></tbody></table>
                <p>
                <pre class="prettyprint">
t=int(input())
while (t>0):
	n=int(input())
	t=t-1
	inp = list(map(int,input().split()))
	print(n)
	for i in range(n):
		print(inp[i] , end=" ")
        #Data is now in inp[i] array, perform logic on it.
                    </pre>
                </p>
                <br>
                <br>
                <br>
                <br>
                <br id="Python2">
                <br>
                <table class="table table-striped"><tbody><th > Python 2.x </th></tbody></table>
                <p>
                <pre class="prettyprint">
t=int(raw_input())
while (t>0):
	n=int(raw_input())
	t=t-1
	inp = list(map(int,raw_input().split()))
	print(n)
	for i in range(n):
		print(inp[i] ),
        #Data is now in inp[i] array, perform logic on it.
                    </pre>
                </p>
                <br>
                <br>
            </div>
    </body>
</html>
