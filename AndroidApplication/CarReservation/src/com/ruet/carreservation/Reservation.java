package com.ruet.carreservation;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Calendar;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.DatePickerDialog;
import android.app.DatePickerDialog.OnDateSetListener;
import android.app.Dialog;
import android.app.TimePickerDialog;
import android.os.Bundle;
import android.os.StrictMode;
import android.support.v7.app.ActionBarActivity;
import android.util.Log;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemSelectedListener;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TimePicker;
import android.widget.Toast;


public class Reservation extends ActionBarActivity {
Spinner spinner_dept,spinner_car,spinner_journey;
String name="",designation="",email="",dept="",phone="",neededdate="",neededtime="",returndate="",returntime="",cartype="",start="",destination="",purpose="";
EditText ed_name,ed_designation,ed_email,ed_phone,ed_destination,ed_start,ed_purpose,ed_reservation_date,ed_reservation_time,ed_return_date,ed_return_time;	
 int hour;
 int minute;
 int day;
 int month;
 int year;
 int hour1;
 int minute1;
 int day1;
 int month1;
 int year1;

StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
 

@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.reservation);
		
		final Calendar c = Calendar.getInstance();
        // Current Hour
        hour1=hour = c.get(Calendar.HOUR_OF_DAY);
        // Current Minute
       minute1= minute = c.get(Calendar.MINUTE);
       day1= day=c.get(Calendar.DAY_OF_MONTH);
       month1= month=c.get(Calendar.MONTH);
       year1= year=c.get(Calendar.YEAR);
        
        ed_name=(EditText) findViewById(R.id.editText_applicationname);
      
        ed_designation=(EditText) findViewById(R.id.editText_designation);
        
        ed_email=(EditText) findViewById(R.id.editText_email);
     
        ed_phone=(EditText) findViewById(R.id.editText_phone);
      
        
        ed_destination=(EditText) findViewById(R.id.editText_destinationplace);
     
        ed_start=(EditText) findViewById(R.id.editText_startjourneyplace);
		
		
		spinner_dept=(Spinner) findViewById(R.id.spinner_deptsec);
		spinner_dept.setOnItemSelectedListener(new OnItemSelectedListener() {

			@Override
			public void onItemSelected(AdapterView<?> parent, View view,
					int position, long id) {
				dept=(String) spinner_dept.getSelectedItem();
				
				
			}

			@Override
			public void onNothingSelected(AdapterView<?> parent) {
				// TODO Auto-generated method stub
				
			}
		});
		
		
		spinner_car=(Spinner) findViewById(R.id.spinner_typeofcar);
		spinner_car.setOnItemSelectedListener(new OnItemSelectedListener() {

			@Override
			public void onItemSelected(AdapterView<?> parent, View view,
					int position, long id) {
				cartype=(String) spinner_car.getSelectedItem();
				
			}

			@Override
			public void onNothingSelected(AdapterView<?> parent) {
				// TODO Auto-generated method stub
				
			}
		});	
		
		spinner_journey=(Spinner) findViewById(R.id.spinner_journeypurpose);
		spinner_journey.setOnItemSelectedListener(new OnItemSelectedListener() {

			@Override
			public void onItemSelected(AdapterView<?> parent, View view,
					int position, long id) {
				purpose=(String) spinner_journey.getSelectedItem();
				
			}

			@Override
			public void onNothingSelected(AdapterView<?> parent) {
				// TODO Auto-generated method stub
				
			}
		});		
		
		
		
		
		
		
		
		
		
		
		
	}





public void buttonaction_insert(View view) {
	  name=ed_name.getText().toString();
	  designation=ed_designation.getText().toString();
	   email=ed_email.getText().toString();
	   phone=ed_phone.getText().toString();
	   destination=ed_destination.getText().toString();
	   start=ed_start.getText().toString();
	ArrayList<NameValuePair> nameValuePairs = new ArrayList<NameValuePair>();
	nameValuePairs.add(new BasicNameValuePair("name",name));
	nameValuePairs.add(new BasicNameValuePair("desig",designation));
	nameValuePairs.add(new BasicNameValuePair("email",email));
	nameValuePairs.add(new BasicNameValuePair("dept",dept));
	nameValuePairs.add(new BasicNameValuePair("phone",phone));
	nameValuePairs.add(new BasicNameValuePair("needed_date",neededdate));
	nameValuePairs.add(new BasicNameValuePair("needed_time",neededtime));
	nameValuePairs.add(new BasicNameValuePair("return_date",returndate));
	nameValuePairs.add(new BasicNameValuePair("return_time",returntime));
	nameValuePairs.add(new BasicNameValuePair("car_type",cartype));
	nameValuePairs.add(new BasicNameValuePair("start_journey",start));
	nameValuePairs.add(new BasicNameValuePair("destination_palce",destination));
	nameValuePairs.add(new BasicNameValuePair("journey_purpose",purpose));
	Toast.makeText(this, name+designation+email+dept+phone+neededdate+neededtime+returndate+returntime+cartype+start+destination+purpose, Toast.LENGTH_LONG).show();
	StrictMode.setThreadPolicy(policy); 
	InputStream is = null;
	String result = null;
	
	//http post
	try{
	        HttpClient httpclient = new DefaultHttpClient();
	        HttpPost httppost = new HttpPost("http://10.0.2.2/car_reservation/insert.php");
	        httppost.setEntity(new UrlEncodedFormEntity(nameValuePairs));
	        HttpResponse response = httpclient.execute(httppost); 
	        HttpEntity entity = response.getEntity();
	        is = entity.getContent();

	        Log.e("log_tag", "connection success ");
	        Toast.makeText(getApplicationContext(), "pass", Toast.LENGTH_SHORT).show();
	   }
	
	
	catch(Exception e)
	{
	        Log.e("log_tag", "Error in http connection "+e.toString());
	        Toast.makeText(getApplicationContext(), "Connection fail", Toast.LENGTH_SHORT).show();

	}
	
	try{
        BufferedReader reader = new BufferedReader(new InputStreamReader(is,"iso-8859-1"),8);
        StringBuilder sb = new StringBuilder();
        String line = null;
        while ((line = reader.readLine()) != null) 
        {
                sb.append(line + "\n");
       	      
        }
        is.close();

        result=sb.toString();
}
catch(Exception e)
{
       Log.e("log_tag", "Error converting result "+e.toString());
	}
	
	
 	try{
		
		JSONObject json_data = new JSONObject(result);

        CharSequence w= (CharSequence) json_data.get("re");
      
        Toast.makeText(getApplicationContext(), w, Toast.LENGTH_SHORT).show();


}
catch(JSONException e)
{
Log.e("log_tag", "Error parsing data "+e.toString());
Toast.makeText(getApplicationContext(), "JsonArray fail", Toast.LENGTH_SHORT).show();
}
	
	
	
	
 }



@SuppressWarnings("deprecation")
public void showTimeDialog_reservation_date(View view) {
	showDialog(100);
 }

@SuppressWarnings("deprecation")
public void showTimeDialog_reservation_time(View view) {
	showDialog(101);
 }

@SuppressWarnings("deprecation")
public void showTimeDialog_return_date(View view) {
	showDialog(102);
 }

@SuppressWarnings("deprecation")
public void showTimeDialog_return_time(View view) {
	showDialog(103);
 }








@Override
protected Dialog onCreateDialog(int id) {
    switch (id) {
    
    case 100:    return new DatePickerDialog(this,datePickerListener, year, month, day);
    
    case 101:    return new TimePickerDialog(this, timePickerListener, hour, minute,
                false);
    
    case 102:    return new DatePickerDialog(this,datePickerListener1, year1, month1, day1);
    
    case 103:    return new TimePickerDialog(this, timePickerListener1, hour1, minute1,
            false);

    }
    return null;
}



private DatePickerDialog.OnDateSetListener datePickerListener=new OnDateSetListener() {
	
	@Override
	public void onDateSet(DatePicker view, int year, int monthOfYear,
			int dayOfMonth) {
		Reservation.this.year=year;
		month=monthOfYear+1;
		day=dayOfMonth;
		neededdate=day+"/"+month+"/"+Reservation.this.year;
		ed_reservation_date=(EditText) findViewById(R.id.editText_reseve_date);
		ed_reservation_date.setText(neededdate);
		
	}
};


private DatePickerDialog.OnDateSetListener datePickerListener1=new OnDateSetListener() {
	
	@Override
	public void onDateSet(DatePicker view, int year, int monthOfYear,
			int dayOfMonth) {
		year1=year;
		month1=monthOfYear+1;
		day1=dayOfMonth;
		returndate=day1+"/"+month1+"/"+Reservation.this.year1;
		ed_return_date=(EditText) findViewById(R.id.editText_return_date);
		ed_return_date.setText(returndate);
	}
};



private TimePickerDialog.OnTimeSetListener timePickerListener = new TimePickerDialog.OnTimeSetListener() {
     

    @Override
    public void onTimeSet(TimePicker view, int hourOfDay, int minutes) {
        // TODO Auto-generated method stub
        hour   = hourOfDay;
        minute = minutes;
       String time_stat="";
       
       if(hour>=12){time_stat="PM";
       if(hour!=12)hour-=12;
       }
       else time_stat="AM";
      
       neededtime=hour+":"+minute+time_stat;
       ed_reservation_time=(EditText) findViewById(R.id.editText_reseve_time);
		ed_reservation_time.setText(neededtime);
   
     }

};



private TimePickerDialog.OnTimeSetListener timePickerListener1 = new TimePickerDialog.OnTimeSetListener() {
    

    @Override
    public void onTimeSet(TimePicker view, int hourOfDay, int minutes) {
        // TODO Auto-generated method stub
        hour1   = hourOfDay;
        minute1 = minutes;
       String time_stat1="";
       
       if(hour1>=12){time_stat1="PM";
       if(hour1!=12)hour1-=12;
       }
       else time_stat1="AM";
      
       returntime=hour1+":"+minute1+time_stat1;
       ed_return_time=(EditText) findViewById(R.id.editText_return_time);
		ed_return_time.setText(returntime);
       
     }

};

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();
		if (id == R.id.action_settings) {
			return true;
		}
		return super.onOptionsItemSelected(item);
	}

	

}
