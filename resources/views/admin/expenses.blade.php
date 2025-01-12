
@extends('../admin/layout/main')

@section('content')



    <!-- Content wrapper -->
    <div class="content-wrapper px-lg-3 px-0">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="tab mb-3">
                <div class="tab-scroll">
                    <button class="tablinks" data-tab="expenses" id="defaultOpen">Expenses</button>
                    <button class="tablinks" data-tab="report">Report</button>
                </div>

            </div>
            <div id="expenses" class="tabcontent">
                <div class="card  pb-4 px-lg-4 px-2 ">
                    <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                        <h5 class="card-header px-0 bg-white border-bottom-0  ">Expenses</h5>
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#add-invoice">Add Invoice</button>
                    </div>

                    <div class="table-responsive">

                        <table id="inprogress" class="table  nowrap border-0 " style="width:100%">
                            <thead>

                                <tr class="dt-head">
                                    <th style="text-align:center; height: 100%;">#</th>
                                    <th style="text-align:center; "> Entry Date </th>
                                    <th style="text-align:center; "> Income Expense </th>
                                    <th style="text-align:center; "> Budget </th>
                                    <th style="text-align:center; " style="min-width:'150px'"> Description
                                    </th>

                                    <th style="text-align:center; "> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>


                                    <td class="text-center"> 10/12/2022</td>

                                    <td class="text-center"> 1243</td>
                                    <td class="text-center">
                                        123$ </td>

                                    <td class="text-center" style="min-width:100px; text-wrap: wrap;">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                                            dolores id totam cum iure voluptates quidem at earum, asperiores
                                            eum?
                                        </p>
                                    </td>


                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-xs"
                                            data-bs-toggle="modal"
                                            data-bs-target="#edit-invoice">Edit</button>
                                        <button type="button" class="btn btn-danger btn-xs"
                                            data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="report" class="tabcontent">
                <div class="card  pb-4 px-lg-4 px-2 ">
                    <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                        <h5 class="card-header px-0 bg-white border-bottom-0  ">Report</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label class="control-label ">From:</label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label class="control-label ">To:</label>
                            <input type="date" class="form-control name" placeholder="Income Expense">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6  ms-auto mb-3 ">
                            <div class="expens-total">

                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1>Income&nbsp;Expense</h1>
                                    </div>
                                    <div>
                                        <h2>62573</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="mb-0 pb-0">Budget</h1>
                                    </div>
                                    <div>
                                        <h2 class="mb-0 pb-0">9288</h2>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h1 class="mb-0 pb-0">Total</h1>
                                    </div>
                                    <div>
                                        <h2 class="mb-0 pb-0">718288</h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">

                        <table id="inprogress" class="table  nowrap border-0 " style="width:100%">
                            <thead>

                                <tr class="dt-head">
                                    <th style="text-align:center; height: 100%;">#</th>
                                    <th style="text-align:center; "> Entry Date </th>
                                    <th style="text-align:center; "> Income Expense </th>
                                    <th style="text-align:center; "> Budget </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>


                                    <td class="text-center"> 10/12/2022</td>

                                    <td class="text-center"> 1243</td>
                                    <td class="text-center">
                                        123$ </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <footer class="content-footer footer bg-footer-theme">
                <div
                    class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                    <div class="mb-2 mb-md-0">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , Developed with by
                        <a href="https://techwizard.com" target="_blank"
                            class="footer-link fw-medium">Techwizard</a>
                    </div>

                </div>
            </footer>
            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>

</div>
<!--add invoice Modal -->
<div class="modal fade" id="add-invoice" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog  modal-lg modal-dialog-centered ">
<div class="modal-content">
    <div class="modal-header modal-header-style">
        <h5 class="modal-title mb-3 text-white" id="staticBackdropLabel">Add Expense
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="">
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label class="control-label ">Entry&nbsp;Date</label>
                        <input type="date" class="form-control">

                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="control-label ">Income Expense </label>
                        <input type="text" class="form-control name" placeholder="Income Expense">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="control-label">Budget </label>
                        <input type="text" class="form-control name">
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label class="control-label">Description</label><br>
                        <!-- <textarea  rows="5"  width="100"> -->
                        <textarea name="" id="" style="width: 100%;" class="form-control"
                            rows="5"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success w-50 mx-auto">Submit</button>
        </div>
    </form>
</div>
</div>
</div>

<!--add invoice Modal -->
<div class="modal fade" id="edit-invoice" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog  modal-lg modal-dialog-centered ">
<div class="modal-content">
    <div class="modal-header modal-header-style">
        <h5 class="modal-title mb-3 text-white" id="staticBackdropLabel">Edit Expence
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="">
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label class="control-label ">Entry&nbsp;Date</label>
                        <input type="date" class="form-control">

                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="control-label ">Income Expense </label>
                        <input type="text" class="form-control name" placeholder="Income Expense">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label class="control-label">Budget </label>
                        <input type="text" class="form-control name">
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label class="control-label">Description</label><br>
                        <!-- <textarea  rows="5"  width="100"> -->
                        <textarea name="" id="" style="width: 100%;" class="form-control"
                            rows="5"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success w-50 mx-auto">Submit</button>
        </div>
    </form>
</div>
</div>
</div>


<!--Delete Modal -->
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="">
        <div class="modal-body">
            <div class="mb-3">
                <h2 class="modal-title text-center" style="font-size: 26px; font-weight: 600; color:red;">
                    Are You Sure?</h2>
                <div class="d-flex justify-content-center mt-4">
                    <img src="/assets/img/undraw_Throw_away_re_x60k.png" alt="" class="img-fluid mx-auto"
                        width="200">
                </div>
                <p class="text-center mb-0 pb-0 mt-3"
                    style="font-size: 16px; font-weight: 500; color:gray;">You want to delete?
                </p>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center ">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary">Yes</button>
        </div>
    </form>
</div>
</div>
</div>
<!-- build:js assets/vendor/js/core.js -->


<script type="text/template" id="std_template">
<tr class="add-more-std-row">
    <td scope="row">
        <select class="form-select category">
            <option selected="" disabled=""> -- Select Students -- </option>
            <option value="16">Anas Patel</option><option value="19">INAYAT ALI RIND</option><option value="27">AHILALA TARIQ</option><option value="36">AZHAR HUSSAIN</option><option value="40">MUHAMMAD MUZAMMIL TABANI</option><option value="48">Malik Nabeel</option><option value="56">ANUM ZEHRA</option><option value="57">TALHA MEMON</option><option value="60">AGHA SULTAN AHMED KHAN</option><option value="62">Amna Naeem</option><option value="64">MUHAMMAD MOIZ</option><option value="76">Maqsood jamal</option><option value="92">Ali Shan</option><option value="93">Arham</option><option value="94">Ibtesam FAZAL</option><option value="97">Gul e Zehra</option><option value="98">Muhammad Sabih</option><option value="101">Alyshaan Bana</option><option value="103">Aashir Maqbool</option><option value="106">Jatin Kumar</option><option value="108">Affan Abdullah</option><option value="109">Rehan Ali Raza</option><option value="110">Hamna Shakir</option><option value="111">Shaikh Hamid</option><option value="118">Myer Ali Iqbal</option><option value="119">Ali Ahmed Memon</option><option value="120">Isha Amir</option><option value="121">Mustafa Bhangda</option><option value="122">Anas Ashfaq</option><option value="123">Ameer Hamza</option><option value="124">Asad Kamdar</option><option value="125">Anas Motiwala</option><option value="126">Zaeem</option><option value="127">Sarim Khoso</option><option value="128">Abhishek</option><option value="132">Arooba Sohail</option><option value="133">Amna Sohail</option><option value="1341">Talha Farooq</option><option value="1350">Shaherbano Imam</option><option value="1353">Amna Wassan</option><option value="1356">Zain Ali</option><option value="1360">HASSAN NATHANI</option><option value="1362">saim ahmed</option><option value="1363">ANJUM ZAFAR</option><option value="1365">AREESHA MEMON</option><option value="1373">AREESHA TARIQ</option><option value="1374">SHARIQ QADIR</option><option value="1383">MUHAMMAD AKBAR</option><option value="1384">MUHAMMAD MUBEEN</option><option value="1400">ALI IMRAN KHAN</option><option value="1403">AHMED ABBAS</option><option value="1405">HANZLA IBTESAM</option><option value="1412">MUHAMMAD DANISH</option><option value="1418">TALHA SHAMREZ</option><option value="1442">RAFAY AHMED QURESHI</option><option value="1443">ZOHA ASIF</option><option value="1448">MUHAMMAD HASNAIN (ALPHA 5032022)</option><option value="1452">ALBAR SALEEM</option><option value="1454">ZAYED KHAN</option><option value="1460">SANI E ZEHRA</option><option value="1467">Hasham Ali</option><option value="1475">HAMNA SHAKIR</option><option value="1477">Ravish Aly</option><option value="1480">SHAHZAMEEN SULEMAN</option><option value="1481">INSHAAL KHALID (application for Windor, RUIC, WLIC and FIC)</option><option value="1484">Abdullah Rizwan</option><option value="1486">Aashir Maqbool</option><option value="1487">ARHAM FAZAL</option><option value="1492">MALIK BILAL</option><option value="1498">Muhammad Alyan</option><option value="1508">Amna Kamran</option><option value="1514">Wasia Waleed</option><option value="1517">YAMEEN RAZA</option><option value="1531">mustafa abbas</option><option value="1533">Ali Haider </option><option value="1537">MIAN SAAD UL SALHEEN</option><option value="1541">AUKASHA JAWAID</option><option value="1551">HOOR UL AIN ABBASI (1872023)</option><option value="1561">MOHAMMAD BIN AEJAZ KHAN</option><option value="1567">TAHA ZAINUDDIN</option><option value="1579">ROZA MALIK</option><option value="1586">KAINAT MUMTAZ</option><option value="1592">Muhammad Ali Baig</option><option value="1594">SAADAN ALI KHAN</option><option value="1602">Muhammad Ahsan Farooq</option><option value="1605">MUHAMMAD WAQAS WADIWALA</option><option value="1606">KINZA ZAFAR</option><option value="1607">ALI SULEMAN RAZZAK</option><option value="1609">SAQLAIN QADIR</option><option value="1613">MUHAMMAD TALHA ARSHAD</option><option value="1618">SAJJAD SIDDIQUI</option><option value="1620">NADIA SHAH (JAHANZEB ALI NOOR)</option><option value="1625">MUHAMMAD UZAIF KHAN</option><option value="1627">mohammad hamza asad</option><option value="1633">DANISH AHMED</option><option value="1636">AMNA MOIN WAHEED</option><option value="1639">AMNA MOIN WAHEED</option><option value="1640">MAHNOOR FATIMA</option><option value="1659">ARHAM FARID</option><option value="1668">MUZZAMIL MASOOD BAWANY</option><option value="1669">UMAIR IMRAN</option><option value="1670">SHAHMIR FARIDI</option><option value="1671">SHAHMIR FARIDI</option><option value="1674">QASIM JAVED</option><option value="1676">HAMZA KHAN</option><option value="1683">Amna Yousuf</option><option value="1684">Muhammad Hamza Arif</option><option value="1686">ASIM THEBA</option><option value="1688">Shaanam Arbab</option><option value="1696">Muhammad Yousuf</option><option value="1716">MIRZA ASAD AHMED</option><option value="1735">MUHAMMAD ALI IRFAN</option><option value="1746">JAWWAD AHMED FAROOQUI</option><option value="1747">MUHAMMAD MUSTAFA IMRAN</option><option value="1757">ABDUL RAFAY  KHAN</option><option value="1762">SHAHRAIZ AMIN</option><option value="1779">KHADIJA KHAN</option><option value="1782">ABDUL HANNAN</option><option value="1785">ABDUL RAFAY</option><option value="1791">DANYAL ALI</option><option value="1793">SYED ALI RAZA</option><option value="1795">Muhammad Sameer Khan</option><option value="1800">Abdul bari</option><option value="1801">SHAMAMA FATIMA</option><option value="1812">SHAYAN IKHLAQ</option><option value="1817">AFNAN AHMED</option><option value="1818">RUKSAAR ATAULLAH</option><option value="1855">AMNA MOIN WAHEED</option><option value="1857">KAINAT MUMTAZ</option><option value="1860">Muhammad Ammar Khan</option><option value="1865">ASAD ALI</option><option value="1867">SHAYAN RIZWAN</option><option value="1875">Sardar Ullah Khan </option><option value="1879">ZOHAIB FAISAL</option><option value="1884">SHEHROZE HYDER</option><option value="1885">HIRA ZAHID</option><option value="1890">NAFEES UR REHMAN</option><option value="1891">HASSAN NISAR</option><option value="1902">Saud Makda (0952023)</option><option value="1907">Shehryar Shahid (5862023)</option><option value="1933">Abbas Ali</option><option value="1947">Abdul  Rehman</option><option value="1978">RIVA MIRANI(3022023)</option><option value="1992">ABU HURAIRA</option><option value="1994">EHTISHAM AAMIR</option><option value="2009">Zain Shaukat</option><option value="2025">Dua Sarfaraz (7912023)</option><option value="2051">Muhammad Hammad Asif</option><option value="2109">SHAH ZAMAN CHISHTI</option><option value="2187">RUBAB REHMAN</option><option value="2228">REHMA ANSARI</option><option value="2244">Muhammad Bilal b/o Madni</option><option value="2291">MUHAMMAD MUSTAFA ADMANI</option><option value="2305">ASHER ALI MIRZA</option><option value="2310">MUHAMMAD HASSAN ALI</option><option value="2314">MUHAMMAD RAZA KHAN</option><option value="2318">Ebad Ejaz</option><option value="2324">FILZA AQEEL</option><option value="2325">Zainab Manzoor</option><option value="2330">ZOHA QADEER KHAN (6962023 )</option><option value="2342">FATIMA NOMAN ISMAIL</option><option value="2343">ZARA NOMAN ISMAIL</option><option value="2350">Osama Yousuf</option><option value="2353">SYED HADI ALI JAFRI  2162024</option><option value="2357">SUFYAN ALI SANDHA 2602024</option><option value="2362">MUHAMMAD ASIM</option><option value="2363">SAMEEN ASHRAF 2312024</option><option value="2377">Huzaifa Masood</option><option value="2383">Muhammad Sameer Shehzad</option><option value="2384">MUHAMMAD MUSTAFA SARFARAZ (0712024)</option><option value="2394">Shaheer Uddin 5612024</option><option value="2403">Hassan Altaf</option><option value="2407">MUHAMMAD HISBAN 8712025</option><option value="2408">SARIM OWAIS (0532024)</option><option value="2415">MUHAMMAD FASEEH SIDDIQUI</option><option value="2416">Hurain Hairs 6072024</option><option value="2417">Malaika Mustafa 1752024</option><option value="2419">Abdul Aziz Vayani</option><option value="2420">Ahmed 8482024</option><option value="2430">Muhammad Huzaifa 3332024</option><option value="2431">Muhammad Hammad 4032024</option><option value="2435">MUHAMMAD ASHIR ADNAN (612024)</option>                </select>
    </td>
    <td>
        <input type="text" class="form-control" placeholder="Enter Fee">
    </td>
    <td>
        <input type="text" class="form-control" placeholder="Enter Suv Total">
    </td>
    <td>
        <button class="btn btn-xs btn-danger">Delete</button>
    </td>
</tr>
</script>







@endsection