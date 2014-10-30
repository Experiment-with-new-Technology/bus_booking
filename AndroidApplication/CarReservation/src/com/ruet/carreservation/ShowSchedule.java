package com.ruet.carreservation;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.ActionBarActivity;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;


public class ShowSchedule extends ActionBarActivity {
String month="January";
Button btn_sat,btn_sun,btn_mon,btn_tue,btn_wed,btn_thu;
TextView textview_month,textview_student,textview_teacher;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.show);
        Intent intent = getIntent();
        month=intent.getStringExtra("month");
        
        textview_month=(TextView) findViewById(R.id.textView_month);
		textview_month.setText("Month:"+month);
		textview_student=(TextView) findViewById(R.id.textView_student);
		textview_teacher=(TextView) findViewById(R.id.textView_teacher);
		btn_sat=(Button) findViewById(R.id.button_saturday);
		btn_sun=(Button) findViewById(R.id.Button_sunday);
		btn_mon=(Button) findViewById(R.id.Button_monday);
		btn_tue=(Button) findViewById(R.id.Button_tuesday);
		btn_wed=(Button) findViewById(R.id.Button_wednesday);
		btn_thu=(Button) findViewById(R.id.Button_thrusday);
	
		
		
		
	
		
		
    }

    
    public void secondcategory(View view){
		if(month.equals("January")){
		textview_student.setText("-4:30PM\n-6:15PM\n-7:15PM");
		textview_teacher.setText("-3:30PM\n-5:15PM");
		}	
		if(month.equals("February")){
			textview_student.setText("-4:45PM\n-6:30PM\n-7:30PM");
			textview_teacher.setText("-3:45PM\n-5:30PM");
			}
		if(month.equals("March")){
			textview_student.setText("-5:00PM\n-5:45PM\n-6:45PM");
			textview_teacher.setText("-4:00PM\n-5:45PM");
			}
		if(month.equals("April")){
			textview_student.setText("-5:15PM\n-7:00PM\n-8:00PM");
			textview_teacher.setText("-4:15PM\n-6:00PM");
			}
		if(month.equals("May")){
			textview_student.setText("-5:30PM\n-7:15PM\n-8:15PM");
			textview_teacher.setText("-4:30PM\n-6:15PM");
			}
		if(month.equals("June - July")){
			textview_student.setText("-5:45PM\n-7:15PM\n-8:15PM");
			textview_teacher.setText("-4:45PM\n-6:30PM");
			}
		if(month.equals("August(1-15)")){
			textview_student.setText("-6:30PM\n-7:15PM\n-8:15PM");
			textview_teacher.setText("-4:30PM\n-6:15PM");
			}
		if(month.equals("August(16-31)")){
			textview_student.setText("-6:15PM\n-7:00PM\n-8:00PM");
			textview_teacher.setText("-4:15PM\n-6:00PM");
			}
		if(month.equals("September(1-15)")){
			textview_student.setText("-6:15PM\n-6:45PM\n-7:45PM");
			textview_teacher.setText("-4:15PM\n-6:00PM");
			}
		if(month.equals("September(16-30)")){
			textview_student.setText("-5:00PM\n-6:35PM\n-7:35PM");
			textview_teacher.setText("-4:00PM\n-5:40PM");
			}
		
		if(month.equals("October(1-15)")){
			textview_student.setText("-4:30PM\n-6:15PM\n-7:15PM");
			textview_teacher.setText("-3:30PM\n-5:15PM");
			}
		if(month.equals("October(16-31)")){
			textview_student.setText("-4:15PM\n-6:00PM\n-7:00PM");
			textview_teacher.setText("-3:15PM\n-5:15PM");
			}
		if(month.equals("November - December")){
			textview_student.setText("-4:15PM\n-5:50PM\n-6:50PM");
			textview_teacher.setText("-3:15PM\n-5:00PM");
			}
    	
    }
    public void firstcategory(View view){
		if(month.equals("January")){
		textview_student.setText("-4:45PM\n-4:45PM\n-6:15PM");
		textview_teacher.setText("-No Bus Available");
		}	
		if(month.equals("February")){
			textview_student.setText("-4:00PM\n-5:00PM\n-6:30PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("March")){
			textview_student.setText("-4:15PM\n-5:15PM\n-5:45PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("April")){
			textview_student.setText("-4:30PM\n-5:30PM\n-7:00PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("May")){
			textview_student.setText("-4:45PM\n-5:45PM\n-7:15PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("June - July")){
			textview_student.setText("-5:00PM\n-6:00PM\n-7:30PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("August(1-15)")){
			textview_student.setText("-5:00PM\n-6:00PM\n-7:15PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("August(16-31)")){
			textview_student.setText("-4:45PM\n-5:45PM\n-7:00PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("September(1-15)")){
			textview_student.setText("-4:30PM\n-5:30PM\n-6:45PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("September(16-30)")){
			textview_student.setText("-4:15PM\n-5:15PM\n-6:35PM");
			textview_teacher.setText("-No Bus Available");
			}
		
		if(month.equals("October(1-15)")){
			textview_student.setText("-4:00PM\n-5:00PM\n-6:15PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("October(16-31)")){
			textview_student.setText("-3:45PM\n-4:45PM\n-6:00PM");
			textview_teacher.setText("-No Bus Available");
			}
		if(month.equals("November - December")){
			textview_student.setText("-3:30PM\n-4:30PM\n-5:45PM");
			textview_teacher.setText("-No Bus Available");
			}
    	
    }
    
    
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.car_reservation, menu);
        return true;
    }

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
