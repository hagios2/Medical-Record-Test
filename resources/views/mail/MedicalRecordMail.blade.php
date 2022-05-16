<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KompleteCare Medical Report</title>
    <style type="text/css">
        body {
            Margin: 0;
            padding: 0;
            background: #f6f9fc;
        }
        table {
            border-spacing: 0;
        }
        td {
            padding: 0;
        }
        img {
            border: 0;
        }

        @media screen and (max-width: 600px) {
        }
        @media screen and (max-width: 400px) {
        }
    </style>
</head>
<body>
<center style="width: 100%;table-layout: fixed;background-color: #f6f9fc;">
    <div style="max-width: 600px;background-color: #FFFFFF;">
        <table style="Margin:0 auto;width: 100%;max-width:600px;font-family: sans-serif;color: #4a4a4a;" align="center">
            <tr>
                <td style="background-color: #9f519c;padding:20px 10px;text-align: center;">
                    <a href="{{env('APP_URL')}}"><img src="{{asset('images/komplete.jpg')}}" alt="KompleteCare" title="KompleteCare" style="height: 100px;width: auto;"></a>
                </td>
            </tr>
            <tr>
                <td style="padding:0px 20px;">
                    <p style="font-size: 14px; color: #25383C; font-weight: 400;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        Hello Team, Kindly find the new medical record below.
                    </p>
                </td>
            </tr>
            <tr>
                <td style="padding:0px 20px;">
                    <div style="font-size: 14px; color: #25383C; font-weight: 400;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <table>
                            <tr>
                                <td>Patient Name</td>
                                <td>{{$medicalRecord->patient_name}}</td>
                            </tr>
                            <tr>
                                <td>CT Scan</td>
                                <td>{{$medicalRecord->ct_scan}}</td>
                            </tr>
                            <tr>
                                <td>MRI</td>
                                <td>{{$medicalRecord->mri}}</td>
                            </tr>
                            <tr>
                                <td>Chest</td>
                                <td><input type="checkbox" {{$medicalRecord->chest ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Lumbo Sacral Vertebrae</td>
                                <td><input type="checkbox"  {{$medicalRecord->lumbo_sacral_vertebrae ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Shoulder Joint</td>
                                <td><input type="checkbox"  {{$medicalRecord->shoulder_joint ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Pelvic Joint</td>
                                <td><input type="checkbox"  {{$medicalRecord->pelvic_joint ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Humerus</td>
                                <td><input type="checkbox"  {{$medicalRecord->humerus ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Fingers</td>
                                <td><input type="checkbox"  {{$medicalRecord->fingers ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Cervical Vertebrae</td>
                                <td><input type="checkbox"  {{$medicalRecord->cervical_vertebrae ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Thoraco Lumbar Vertebrae</td>
                                <td><input type="checkbox"  {{$medicalRecord->thoraco_lumbar_vertebrae ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Elbow Joint</td>
                                <td><input type="checkbox"  {{$medicalRecord->elbow_joint ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Hip Joint</td>
                                <td><input type="checkbox"  {{$medicalRecord->hip_joint ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Radius/Ulner</td>
                                <td><input type="checkbox"  {{$medicalRecord->radius_or_ulner ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Toes</td>
                                <td><input type="checkbox"  {{$medicalRecord->toes ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Thoracic Vertebrae</td>
                                <td><input type="checkbox"  {{$medicalRecord->thoracic_vertebrae ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Wrist Joint</td>
                                <td><input type="checkbox"  {{$medicalRecord->wrist_joint ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Knee Joint</td>
                                <td><input type="checkbox"  {{$medicalRecord->knee_joint ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Femoral</td>
                                <td><input type="checkbox"  {{$medicalRecord->femoral ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Foot</td>
                                <td><input type="checkbox"  {{$medicalRecord->foot ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Lumvar Vertebrae</td>
                                <td><input type="checkbox"  {{$medicalRecord->lumvar_vertebrae ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Thoracic Inlet</td>
                                <td><input type="checkbox"  {{$medicalRecord->thoracic_inlet ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Sacro Lliac Joint</td>
                                <td><input type="checkbox"  {{$medicalRecord->sacro_lliac_joint ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Ankle</td>
                                <td><input type="checkbox"  {{$medicalRecord->ankle ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Tibia/Fibula</td>
                                <td><input type="checkbox"  {{$medicalRecord->tibia_or_fibula ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Obstetric</td>
                                <td><input type="checkbox"  {{$medicalRecord->obstetric ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Abdioninal</td>
                                <td><input type="checkbox"  {{$medicalRecord->abdioninal ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Pelvis</td>
                                <td><input type="checkbox"  {{$medicalRecord->pelvis ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Prostrate</td>
                                <td><input type="checkbox"  {{$medicalRecord->prostrate ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Breast</td>
                                <td><input type="checkbox"  {{$medicalRecord->breast ? 'checked' : ''}}/></td>
                            </tr>
                            <tr>
                                <td>Thyroid</td>
                                <td><input type="checkbox"  {{$medicalRecord->thyroid ? 'checked' : ''}}/></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:0px 20px;">
                    <p style="font-size: 14px; color: #25383C; font-weight: 400;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        Thanks,<br/>
                        <span style="font-weight: 700;">KompleteCare</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="background-color: #6EC7E0;padding:20px 10px;text-align: center; color: white">
                    <h5>Emmanuel Oteng Wilson</h5>
                </td>
            </tr>
        </table>
    </div>
</center>
</body>
</html>
