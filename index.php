<!DOCTYPE html>
<html>
    <head>
        <img src="https://i.postimg.cc/4ycF1CLr/headbg.png" width="100%" height="100%">
        <link href="style.css" type="text/css" rel="stylesheet">
    
    <title>Jordan Hospital Appointment Scheduler</title>


    </head>
    <body>
    <form action="project.php" method="post" class="form" onsubmit="return validateNotEmpty()">
        <br> 
        <fieldset class="mainField">

            <fieldset>
                <legend class="Legends">Personal information</legend>

                <Label class="labels">Full name:     <mark class="aster">*</mark> </Label>
                <input type="text" class="info" id="Name" name="fname" id="alignBox" placeholder="Ahmed Al-Mohsen" >
                <br><br>
                <Label class="labels">Email address: <mark class="aster">*</mark></Label>
                <input type="email" class="info" id="Email" name="eaddr" placeholder="example@example.com" >
                <br><br>
                <Label class="labels">Phone number: <mark class="aster">*</mark></Label>
                <input type="text" class="info" id="Number" name="mobile" placeholder="00 962 7 1234 5678" >
            </fieldset>
            <br>
            <fieldset>
                <legend class="Legends">Appointment information</legend>
                <Label class="labels">Appointment date: <mark class="aster">*</mark></Label>
                <input type="date" class="Appointment" name="aptdate" id="date" >

                <Label class="labels">Appointment time: <mark class="aster">*</mark></Label>
                <input type="time" class="Appointment" id="time" name="apttime" step="1800" >
                
                
                <br><br>
                <Label class="labels">Preferred call-back time: <mark class="aster">*</mark></Label>
                <input type="date" class="AppointmentCallBack" name="cbdate"id="Cdate" >
                <input type="time" class="AppointmentCallBack" name="cbtime"id="Ctime" >

            </fieldset>
            <br>
            <fieldset>
                <legend class="Legends">Doctor information</legend>
                <Label class="labels">Department name: <mark class="aster">*</mark></Label>
                <select name="deptname" id="Dep" >
                    <option value="Select" selected disabled>------------------------------------</option>
                    <option class="centerme" value="Cardiology">Cardiology</option>
                    <option class="centerme" value="Neurology">Neurology</option>
                    <option class="centerme" value="Dermatology">Dermatology</option>
                    <option class="centerme" value="Neurosurgery">Neurosurgery</option>
                    <option class="centerme" value="Psychiatry">Psychiatry</option>
                </select>

                <br><br>

                <Label class="labels">Doctor name: <mark class="aster">*</mark></Label>
                <select  name="docname"id="doc" >
                    <option class="centerme" value="Select" selected disabled>------------------------------------</option>
                    <option class="centerme" value="Emad Issa">Emad Issa</option>
                    <option class="centerme" value="Ahmad Ali">Ahmad Ali</option>
                    <option class="centerme" value="Layan Ahmad">Layan Ahmad</option>
                    <option class="centerme" value="Farah Walid">Farah Walid</option>
                    <option class="centerme" value="Taher abedalnabi">Taher abedalnabi</option>
                    <option class="centerme" value="Tariq Bader">Tariq Bader</option>
                    <option class="centerme" value="Hala Ghanem">Hala Ghanem</option>
                    <option class="centerme" value="Anas Taan">Anas Taan</option>
                    <option class="centerme" value="Darwish Badran">Darwish Badran</option>
                    <option class="centerme" value="Amjad Shatarat">Amjad Shatarat</option>
                    <option class="centerme" value="Heba Kalbouneh">Heba Kalbouneh</option>
                    <option class="centerme" value="Maha AlBeltagy">Maha AlBeltagy</option>
                    <option class="centerme" value="Hammam Allahham">Hammam Allahham</option>
                    <option class="centerme" value="Ahmad Salman">Ahmad Salman</option>
                    <option class="centerme" value="Mohammad AlSalem">Mohammad AlSalem</option>
                </select>



            </fieldset>
            <br>
            <fieldset id="centerfield">
                <legend class="Legends" id="remarks">Case Remarks</legend>
                <textarea name="comments" rows="10" cols="70" id="centertxtarea" placeholder="List special symptoms if any... "></textarea>



            </fieldset>








        </fieldset>
        <br>
        <input type="submit" id="subCenter" value="Submit" onclick="return validateNotEmpty()">
        <button type="reset" id="clearCenter">Clear</button>






    </form>
    <footer id="footer">
    <p class="Legends" style="color:beige; text-indent: 8px;" >
        Contact Us
        <br><br>
        <img src='https://i.ibb.co/0X7fYDj/loc-icon.png' class="logos">
        <a href='https://maps.app.goo.gl/7E2sGamWUyph3geF6' target="_blank">Al-Nuzha Street - Abdali Interchange Amman, 11191 Jordan</a>
        <br><br>
        <img src='https://i.ibb.co/xqNthgm/phone-icon.png'class="logos">
        +962-6-5109999
        <br><br>
        <img src='https://i.ibb.co/0B9WFsk/mail-icon.png'class="logos">
        <label><a href="mailto:Jordan-Hospiital@ju.healthcare.jo" class="spacing"> Jordan-Hospiital@ju.healthcare.jo</a></label>
        <br><br>
        <p class="Legends" style="color:beige;  text-indent: 8px;">Newsletter</p>
        <section>
        <p class="newsLetter" style="color:beige; font-family:'Trebuchet MS'; text-indent:-13px">Subscribe to our newsletter and stay updated and you can see the archive here</p>
        <input type="mail" name="newsletter" class="info" id="newsmail" style=" margin-left:3px"> 
        <button type="button" value="SUBSCRIBE" style="border-radius: 8px;width:90px;height:21px; color:#096798;font-family:'Trebuchet MS';font-weight:bold;">Subscribe</button>
        </section>

    </p>
    </footer>
    <script src="frontEnd.js"></script>
</body>
</html>