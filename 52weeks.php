<?php
include("nav.php");
include("connections.php");
session_start();
?>

<script>
	function getthis(){
		varbase = parseInt(document.getElementById("txtbase").value).toFixed(2);
		varincrement = parseInt(document.getElementById("txtincrement").value).toFixed(2);

		document.getElementById("txtAmountWk1").value = varbase;

		document.getElementById("txtTotalWk1").value = parseInt(varbase);

		document.getElementById("txtearn").value = document.getElementById("txtTotalWk52").value;

32
323



		document.getElementById("txtAmountWk2").value = parseInt(varincrement) + parseInt(document.getElementById("txtAmountWk1").value);
		document.getElementById("txtTotalWk2").value = parseInt(document.getElementById("txtTotalWk1").value) + parseInt(document.getElementById("txtAmountWk2").value);

		document.getElementById("txtAmountWk3").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk2").value);
		document.getElementById("txtTotalWk3").value = parseInt(document.getElementById("txtTotalWk2").value) + parseInt(document.getElementById("txtAmountWk3").value);

		document.getElementById("txtAmountWk4").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk3").value);
		document.getElementById("txtTotalWk4").value = parseInt(document.getElementById("txtTotalWk3").value) + parseInt(document.getElementById("txtAmountWk4").value);

		document.getElementById("txtAmountWk5").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk4").value);
		document.getElementById("txtTotalWk5").value = parseInt(document.getElementById("txtTotalWk4").value) + parseInt(document.getElementById("txtAmountWk5").value);
		
		document.getElementById("txtAmountWk6").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk5").value);
		document.getElementById("txtTotalWk6").value = parseInt(document.getElementById("txtTotalWk5").value) + parseInt(document.getElementById("txtAmountWk6").value);

		document.getElementById("txtAmountWk7").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk6").value);
		document.getElementById("txtTotalWk7").value = parseInt(document.getElementById("txtTotalWk6").value) + parseInt(document.getElementById("txtAmountWk7").value);

		document.getElementById("txtAmountWk8").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk7").value);
		document.getElementById("txtTotalWk8").value = parseInt(document.getElementById("txtTotalWk7").value) + parseInt(document.getElementById("txtAmountWk8").value);

		document.getElementById("txtAmountWk9").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk8").value);
		document.getElementById("txtTotalWk9").value = parseInt(document.getElementById("txtTotalWk8").value) + parseInt(document.getElementById("txtAmountWk9").value);

		document.getElementById("txtAmountWk10").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk9").value);
		document.getElementById("txtTotalWk10").value = parseInt(document.getElementById("txtTotalWk9").value) + parseInt(document.getElementById("txtAmountWk10").value);

		document.getElementById("txtAmountWk11").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk10").value);
		document.getElementById("txtTotalWk11").value = parseInt(document.getElementById("txtTotalWk10").value) + parseInt(document.getElementById("txtAmountWk11").value);

		document.getElementById("txtAmountWk12").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk11").value);
		document.getElementById("txtTotalWk12").value = parseInt(document.getElementById("txtTotalWk11").value) + parseInt(document.getElementById("txtAmountWk12").value);

		document.getElementById("txtAmountWk13").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk12").value);
		document.getElementById("txtTotalWk13").value = parseInt(document.getElementById("txtTotalWk12").value) + parseInt(document.getElementById("txtAmountWk13").value);

		document.getElementById("txtAmountWk14").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk13").value);
		document.getElementById("txtTotalWk14").value = parseInt(document.getElementById("txtTotalWk13").value) + parseInt(document.getElementById("txtAmountWk14").value);

		document.getElementById("txtAmountWk15").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk14").value);
		document.getElementById("txtTotalWk15").value = parseInt(document.getElementById("txtTotalWk14").value) + parseInt(document.getElementById("txtAmountWk15").value);

		document.getElementById("txtAmountWk16").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk15").value);
		document.getElementById("txtTotalWk16").value = parseInt(document.getElementById("txtTotalWk15").value) + parseInt(document.getElementById("txtAmountWk16").value);

		document.getElementById("txtAmountWk17").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk16").value);
		document.getElementById("txtTotalWk17").value = parseInt(document.getElementById("txtTotalWk16").value) + parseInt(document.getElementById("txtAmountWk17").value);

		document.getElementById("txtAmountWk18").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk17").value);
		document.getElementById("txtTotalWk18").value = parseInt(document.getElementById("txtTotalWk17").value) + parseInt(document.getElementById("txtAmountWk18").value);

		document.getElementById("txtAmountWk19").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk18").value);
		document.getElementById("txtTotalWk19").value = parseInt(document.getElementById("txtTotalWk18").value) + parseInt(document.getElementById("txtAmountWk19").value);

		document.getElementById("txtAmountWk20").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk19").value);
		document.getElementById("txtTotalWk20").value = parseInt(document.getElementById("txtTotalWk19").value) + parseInt(document.getElementById("txtAmountWk20").value);

		document.getElementById("txtAmountWk21").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk20").value);
		document.getElementById("txtTotalWk21").value = parseInt(document.getElementById("txtTotalWk20").value) + parseInt(document.getElementById("txtAmountWk21").value);

		document.getElementById("txtAmountWk22").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk21").value);
		document.getElementById("txtTotalWk22").value = parseInt(document.getElementById("txtTotalWk21").value) + parseInt(document.getElementById("txtAmountWk22").value);

		document.getElementById("txtAmountWk23").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk22").value);
		document.getElementById("txtTotalWk23").value = parseInt(document.getElementById("txtTotalWk22").value) + parseInt(document.getElementById("txtAmountWk23").value);

		document.getElementById("txtAmountWk24").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk23").value);
		document.getElementById("txtTotalWk24").value = parseInt(document.getElementById("txtTotalWk23").value) + parseInt(document.getElementById("txtAmountWk24").value);

		document.getElementById("txtAmountWk25").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk24").value);
		document.getElementById("txtTotalWk25").value = parseInt(document.getElementById("txtTotalWk24").value) + parseInt(document.getElementById("txtAmountWk25").value);

		document.getElementById("txtAmountWk26").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk25").value);
		document.getElementById("txtTotalWk26").value = parseInt(document.getElementById("txtTotalWk25").value) + parseInt(document.getElementById("txtAmountWk26").value);

		document.getElementById("txtAmountWk27").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk26").value);
		document.getElementById("txtTotalWk27").value = parseInt(document.getElementById("txtTotalWk26").value) + parseInt(document.getElementById("txtAmountWk27").value);

		document.getElementById("txtAmountWk28").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk27").value);
		document.getElementById("txtTotalWk28").value = parseInt(document.getElementById("txtTotalWk27").value) + parseInt(document.getElementById("txtAmountWk28").value);

		document.getElementById("txtAmountWk29").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk28").value);
		document.getElementById("txtTotalWk29").value = parseInt(document.getElementById("txtTotalWk28").value) + parseInt(document.getElementById("txtAmountWk29").value);

		document.getElementById("txtAmountWk30").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk29").value);
		document.getElementById("txtTotalWk30").value = parseInt(document.getElementById("txtTotalWk29").value) + parseInt(document.getElementById("txtAmountWk30").value);

		document.getElementById("txtAmountWk31").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk30").value);
		document.getElementById("txtTotalWk31").value = parseInt(document.getElementById("txtTotalWk30").value) + parseInt(document.getElementById("txtAmountWk31").value);

		document.getElementById("txtAmountWk32").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk31").value);
		document.getElementById("txtTotalWk32").value = parseInt(document.getElementById("txtTotalWk31").value) + parseInt(document.getElementById("txtAmountWk32").value);

		document.getElementById("txtAmountWk33").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk32").value);
		document.getElementById("txtTotalWk33").value = parseInt(document.getElementById("txtTotalWk32").value) + parseInt(document.getElementById("txtAmountWk33").value);

		document.getElementById("txtAmountWk34").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk33").value);
		document.getElementById("txtTotalWk34").value = parseInt(document.getElementById("txtTotalWk33").value) + parseInt(document.getElementById("txtAmountWk34").value);

		document.getElementById("txtAmountWk35").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk34").value);
		document.getElementById("txtTotalWk35").value = parseInt(document.getElementById("txtTotalWk34").value) + parseInt(document.getElementById("txtAmountWk35").value);

		document.getElementById("txtAmountWk36").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk35").value);
		document.getElementById("txtTotalWk36").value = parseInt(document.getElementById("txtTotalWk35").value) + parseInt(document.getElementById("txtAmountWk36").value);

		document.getElementById("txtAmountWk37").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk36").value);
		document.getElementById("txtTotalWk37").value = parseInt(document.getElementById("txtTotalWk36").value) + parseInt(document.getElementById("txtAmountWk37").value);

		document.getElementById("txtAmountWk38").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk37").value);
		document.getElementById("txtTotalWk38").value = parseInt(document.getElementById("txtTotalWk37").value) + parseInt(document.getElementById("txtAmountWk38").value);

		document.getElementById("txtAmountWk39").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk38").value);
		document.getElementById("txtTotalWk39").value = parseInt(document.getElementById("txtTotalWk38").value) + parseInt(document.getElementById("txtAmountWk39").value);

		document.getElementById("txtAmountWk40").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk39").value);
		document.getElementById("txtTotalWk40").value = parseInt(document.getElementById("txtTotalWk39").value) + parseInt(document.getElementById("txtAmountWk40").value);

		document.getElementById("txtAmountWk41").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk40").value);
		document.getElementById("txtTotalWk41").value = parseInt(document.getElementById("txtTotalWk40").value) + parseInt(document.getElementById("txtAmountWk41").value);

		document.getElementById("txtAmountWk42").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk41").value);
		document.getElementById("txtTotalWk42").value = parseInt(document.getElementById("txtTotalWk41").value) + parseInt(document.getElementById("txtAmountWk42").value);

		document.getElementById("txtAmountWk43").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk42").value);
		document.getElementById("txtTotalWk43").value = parseInt(document.getElementById("txtTotalWk42").value) + parseInt(document.getElementById("txtAmountWk43").value);

		document.getElementById("txtAmountWk44").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk43").value);
		document.getElementById("txtTotalWk44").value = parseInt(document.getElementById("txtTotalWk43").value) + parseInt(document.getElementById("txtAmountWk44").value);

		document.getElementById("txtAmountWk45").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk44").value);
		document.getElementById("txtTotalWk45").value = parseInt(document.getElementById("txtTotalWk44").value) + parseInt(document.getElementById("txtAmountWk45").value);

		document.getElementById("txtAmountWk46").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk45").value);
		document.getElementById("txtTotalWk46").value = parseInt(document.getElementById("txtTotalWk45").value) + parseInt(document.getElementById("txtAmountWk46").value);

		document.getElementById("txtAmountWk47").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk46").value);
		document.getElementById("txtTotalWk47").value = parseInt(document.getElementById("txtTotalWk46").value) + parseInt(document.getElementById("txtAmountWk47").value);

		document.getElementById("txtAmountWk48").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk47").value);
		document.getElementById("txtTotalWk48").value = parseInt(document.getElementById("txtTotalWk47").value) + parseInt(document.getElementById("txtAmountWk48").value);

		document.getElementById("txtAmountWk49").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk48").value);
		document.getElementById("txtTotalWk49").value = parseInt(document.getElementById("txtTotalWk48").value) + parseInt(document.getElementById("txtAmountWk49").value);

		document.getElementById("txtAmountWk50").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk49").value);
		document.getElementById("txtTotalWk50").value = parseInt(document.getElementById("txtTotalWk49").value) + parseInt(document.getElementById("txtAmountWk50").value);

		document.getElementById("txtAmountWk51").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk50").value);
		document.getElementById("txtTotalWk51").value = parseInt(document.getElementById("txtTotalWk50").value) + parseInt(document.getElementById("txtAmountWk51").value);

		document.getElementById("txtAmountWk52").value = parseInt(varbase) + parseInt(document.getElementById("txtAmountWk51").value);
		document.getElementById("txtTotalWk52").value = parseInt(document.getElementById("txtTotalWk51").value) + parseInt(document.getElementById("txtAmountWk52").value);

		
	}
	
	
	
	function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>


<title>52 Weeks Challenge Online Calculator</title>
<h1>52 Weeks Challenge Online Calculator</h1>
<div class='container-fluid shadow-lg p-3 mb-5 mt-5 bg-white rounded   align-middle'>
<table class="table">


<form>
  <div class="row">
    <div class="col">
      <label class="text-primary" for="txtremarks">Base:</label><input class="form-control" type="text" id="txtbase" onkeyup="getthis()">
    </div>
    <div class="col">
      <label class="text-primary" for="txtremarks">Increment:</label><input class="form-control" type="text" id="txtincrement" onkeyup="getthis()">
    </div>
    <div class="col">
      <label class="text-primary" for="txtremarks">Earn:</label><input class="form-control" type="text" id="txtearn">
    </div>
  </div>
</form>


</table><br><br>


<button onclick="myFunction()" class="btn btn-primary">Show/Hide Table</button>

<div id="myDIV">
  <table class="table">
<tr>
	<td>Week</td><td>Amount</td><td>Total</td>
</tr>

<tr>
	<td>1</td><td><input type="text" id="txtAmountWk1"></td><td><input type="text" id="txtTotalWk1"></td>
</tr>

<tr>
	<td>2</td><td><input type="text" id="txtAmountWk2"></td><td><input type="text" id="txtTotalWk2"></td>
</tr>

<tr>
	<td>3</td><td><input type="text" id="txtAmountWk3"></td><td><input type="text" id="txtTotalWk3"></td>
</tr>

<tr>
	<td>4</td><td><input type="text" id="txtAmountWk4"></td><td><input type="text" id="txtTotalWk4"></td>
</tr>

<tr>
	<td>5</td><td><input type="text" id="txtAmountWk5"></td><td><input type="text" id="txtTotalWk5"></td>
</tr>

<tr>
	<td>6</td><td><input type="text" id="txtAmountWk6"></td><td><input type="text" id="txtTotalWk6"></td>
</tr>

<tr>
	<td>7</td><td><input type="text" id="txtAmountWk7"></td><td><input type="text" id="txtTotalWk7"></td>
</tr>

<tr>
	<td>8</td><td><input type="text" id="txtAmountWk8"></td><td><input type="text" id="txtTotalWk8"></td>
</tr>

<tr>
	<td>9</td><td><input type="text" id="txtAmountWk9"></td><td><input type="text" id="txtTotalWk9"></td>
</tr>

<tr>
	<td>10</td><td><input type="text" id="txtAmountWk10"></td><td><input type="text" id="txtTotalWk10"></td>
</tr>

<tr>
	<td>11</td><td><input type="text" id="txtAmountWk11"></td><td><input type="text" id="txtTotalWk11"></td>
</tr>

<tr>
	<td>12</td><td><input type="text" id="txtAmountWk12"></td><td><input type="text" id="txtTotalWk12"></td>
</tr>

<tr>
	<td>13</td><td><input type="text" id="txtAmountWk13"></td><td><input type="text" id="txtTotalWk13"></td>
</tr>

<tr>
	<td>14</td><td><input type="text" id="txtAmountWk14"></td><td><input type="text" id="txtTotalWk14"></td>
</tr>

<tr>
	<td>15</td><td><input type="text" id="txtAmountWk15"></td><td><input type="text" id="txtTotalWk15"></td>
</tr>

<tr>
	<td>16</td><td><input type="text" id="txtAmountWk16"></td><td><input type="text" id="txtTotalWk16"></td>
</tr>

<tr>
	<td>17</td><td><input type="text" id="txtAmountWk17"></td><td><input type="text" id="txtTotalWk17"></td>
</tr>

<tr>
	<td>18</td><td><input type="text" id="txtAmountWk18"></td><td><input type="text" id="txtTotalWk18"></td>
</tr>

<tr>
	<td>19</td><td><input type="text" id="txtAmountWk19"></td><td><input type="text" id="txtTotalWk19"></td>
</tr>

<tr>
	<td>20</td><td><input type="text" id="txtAmountWk20"></td><td><input type="text" id="txtTotalWk20"></td>
</tr>

<tr>
	<td>21</td><td><input type="text" id="txtAmountWk21"></td><td><input type="text" id="txtTotalWk21"></td>
</tr>

<tr>
	<td>22</td><td><input type="text" id="txtAmountWk22"></td><td><input type="text" id="txtTotalWk22"></td>
</tr>

<tr>
	<td>23</td><td><input type="text" id="txtAmountWk23"></td><td><input type="text" id="txtTotalWk23"></td>
</tr>

<tr>
	<td>24</td><td><input type="text" id="txtAmountWk24"></td><td><input type="text" id="txtTotalWk24"></td>
</tr>

<tr>
	<td>25</td><td><input type="text" id="txtAmountWk25"></td><td><input type="text" id="txtTotalWk25"></td>
</tr>

<tr>
	<td>26</td><td><input type="text" id="txtAmountWk26"></td><td><input type="text" id="txtTotalWk26"></td>
</tr>

<tr>
	<td>27</td><td><input type="text" id="txtAmountWk27"></td><td><input type="text" id="txtTotalWk27"></td>
</tr>

<tr>
	<td>28</td><td><input type="text" id="txtAmountWk28"></td><td><input type="text" id="txtTotalWk28"></td>
</tr>

<tr>
	<td>29</td><td><input type="text" id="txtAmountWk29"></td><td><input type="text" id="txtTotalWk29"></td>
</tr>

<tr>
	<td>30</td><td><input type="text" id="txtAmountWk30"></td><td><input type="text" id="txtTotalWk30"></td>
</tr>

<tr>
	<td>31</td><td><input type="text" id="txtAmountWk31"></td><td><input type="text" id="txtTotalWk31"></td>
</tr>

<tr>
	<td>32</td><td><input type="text" id="txtAmountWk32"></td><td><input type="text" id="txtTotalWk32"></td>
</tr>

<tr>
	<td>33</td><td><input type="text" id="txtAmountWk33"></td><td><input type="text" id="txtTotalWk33"></td>
</tr>

<tr>
	<td>34</td><td><input type="text" id="txtAmountWk34"></td><td><input type="text" id="txtTotalWk34"></td>
</tr>

<tr>
	<td>35</td><td><input type="text" id="txtAmountWk35"></td><td><input type="text" id="txtTotalWk35"></td>
</tr>

<tr>
	<td>36</td><td><input type="text" id="txtAmountWk36"></td><td><input type="text" id="txtTotalWk36"></td>
</tr>

<tr>
	<td>37</td><td><input type="text" id="txtAmountWk37"></td><td><input type="text" id="txtTotalWk37"></td>
</tr>

<tr>
	<td>38</td><td><input type="text" id="txtAmountWk38"></td><td><input type="text" id="txtTotalWk38"></td>
</tr>

<tr>
	<td>39</td><td><input type="text" id="txtAmountWk39"></td><td><input type="text" id="txtTotalWk39"></td>
</tr>

<tr>
	<td>40</td><td><input type="text" id="txtAmountWk40"></td><td><input type="text" id="txtTotalWk40"></td>
</tr>

<tr>
	<td>41</td><td><input type="text" id="txtAmountWk41"></td><td><input type="text" id="txtTotalWk41"></td>
</tr>

<tr>
	<td>42</td><td><input type="text" id="txtAmountWk42"></td><td><input type="text" id="txtTotalWk42"></td>
</tr>

<tr>
	<td>43</td><td><input type="text" id="txtAmountWk43"></td><td><input type="text" id="txtTotalWk43"></td>
</tr>

<tr>
	<td>44</td><td><input type="text" id="txtAmountWk44"></td><td><input type="text" id="txtTotalWk44"></td>
</tr>

<tr>
	<td>45</td><td><input type="text" id="txtAmountWk45"></td><td><input type="text" id="txtTotalWk45"></td>
</tr>

<tr>
	<td>46</td><td><input type="text" id="txtAmountWk46"></td><td><input type="text" id="txtTotalWk46"></td>
</tr>

<tr>
	<td>47</td><td><input type="text" id="txtAmountWk47"></td><td><input type="text" id="txtTotalWk47"></td>
</tr>

<tr>
	<td>48</td><td><input type="text" id="txtAmountWk48"></td><td><input type="text" id="txtTotalWk48"></td>
</tr>

<tr>
	<td>49</td><td><input type="text" id="txtAmountWk49"></td><td><input type="text" id="txtTotalWk49"></td>
</tr>

<tr>
	<td>50</td><td><input type="text" id="txtAmountWk50"></td><td><input type="text" id="txtTotalWk50"></td>
</tr>

<tr>
	<td>51</td><td><input type="text" id="txtAmountWk51"></td><td><input type="text" id="txtTotalWk51"></td>
</tr>

<tr>
	<td>52</td><td><input type="text" id="txtAmountWk52"></td><td><input type="text" id="txtTotalWk52"></td>
</tr>


</table>
</div>
</div>
<br>

<?php
include("footer.php");
?>
