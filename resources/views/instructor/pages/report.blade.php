@extends('instructor.instructor_dashboard')
@section('instructor')


    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tất cả học viên</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <div class="btn-group">
                        <a href="{{ route('instructor.add.user') }}" class="btn btn-primary"><i
                                class="bx bx-book-add"></i>Thêm học viên </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('instructor.import.user') }}" class="btn btn-warning "> <i
                                class="bx bx-cloud-upload"></i>Import </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('instructor.export') }}" class="btn btn-danger "><i
                                class="bx bx-cloud-download"></i>Export </a>
                        <a href="{{ route('instructor.import.report.get') }}" class="btn btn-danger "><i
                                class="bx bx-cloud-download"></i>JIRA Report </a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <table width="493" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;width:493px;">
                <tbody>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#DCE6F1;padding:0 5.75pt;">
<span style="background-color:#DCE6F1;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Initial Configuration</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#DCE6F1;padding:0 5.75pt;">
<span style="background-color:#DCE6F1;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Testing request</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#DCE6F1;padding:0 5.75pt;">
<span style="background-color:#DCE6F1;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Done</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#DCE6F1;padding:0 5.75pt;">
<span style="background-color:#DCE6F1;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>5</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#DCE6F1;padding:0 5.75pt;">
<span style="background-color:#DCE6F1;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#DCE6F1;padding:0 5.75pt;">
<span style="background-color:#DCE6F1;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#DCE6F1;padding:0 5.75pt;">
<span style="background-color:#DCE6F1;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>In-progress</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#DCE6F1;padding:0 5.75pt;">
<span style="background-color:#DCE6F1;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>2</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#F2DCDB;padding:0 5.75pt;">
<span style="background-color:#F2DCDB;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>App Core</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#F2DCDB;padding:0 5.75pt;">
<span style="background-color:#F2DCDB;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Testing request</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#F2DCDB;padding:0 5.75pt;">
<span style="background-color:#F2DCDB;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Done</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#F2DCDB;padding:0 5.75pt;">
<span style="background-color:#F2DCDB;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>1</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#EBF1DE;padding:0 5.75pt;">
<span style="background-color:#EBF1DE;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Content Everywhere</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#EBF1DE;padding:0 5.75pt;">
<span style="background-color:#EBF1DE;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Testing request</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#EBF1DE;padding:0 5.75pt;">
<span style="background-color:#EBF1DE;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Done</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#EBF1DE;padding:0 5.75pt;">
<span style="background-color:#EBF1DE;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>1</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#EBF1DE;padding:0 5.75pt;">
<span style="background-color:#EBF1DE;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#EBF1DE;padding:0 5.75pt;">
<span style="background-color:#EBF1DE;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#EBF1DE;padding:0 5.75pt;">
<span style="background-color:#EBF1DE;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>In-progress</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#EBF1DE;padding:0 5.75pt;">
<span style="background-color:#EBF1DE;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>1</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Content Experience</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Testing request</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Done</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>2</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>In-progress</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>1</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Bug found</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Open</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#E4DFEC;padding:0 5.75pt;">
<span style="background-color:#E4DFEC;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>1</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#DAEEF3;padding:0 5.75pt;">
<span style="background-color:#DAEEF3;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Continuous Configuration</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#DAEEF3;padding:0 5.75pt;">
<span style="background-color:#DAEEF3;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Testing request</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#DAEEF3;padding:0 5.75pt;">
<span style="background-color:#DAEEF3;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Done</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#DAEEF3;padding:0 5.75pt;">
<span style="background-color:#DAEEF3;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>5</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#DAEEF3;padding:0 5.75pt;">
<span style="background-color:#DAEEF3;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#DAEEF3;padding:0 5.75pt;">
<span style="background-color:#DAEEF3;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Bug found</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#DAEEF3;padding:0 5.75pt;">
<span style="background-color:#DAEEF3;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Open</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#DAEEF3;padding:0 5.75pt;">
<span style="background-color:#DAEEF3;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>5</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Playback Control</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Testing request</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Done</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>1</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>In-progress</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>2</b></font></span></font></div>
</span></td>
                </tr>
                <tr height="25" style="height:15pt;">
                    <td width="230" valign="bottom" nowrap=""
                        style="width:138pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>&nbsp;</b></font></span></font></div>
</span></td>
                    <td width="173" valign="bottom" nowrap=""
                        style="width:104pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Bug found</b></font></span></font></div>
</span></td>
                    <td width="133" valign="bottom" nowrap=""
                        style="width:80pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font color="black"><b>Open</b></font></span></font></div>
</span></td>
                    <td width="80" valign="bottom" nowrap=""
                        style="width:48pt;height:15pt;background-color:#FDE9D9;padding:0 5.75pt;">
<span style="background-color:#FDE9D9;">
<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span
            style="font-size:11pt;"><font color="black"><b>1</b></font></span></font></div>
</span></td>
                </tr>
                </tbody>
            </table>
        </div>


    </div>




@endsection
