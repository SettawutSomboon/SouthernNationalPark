package app.project2.southnationalpark;

import java.io.BufferedInputStream;
import java.io.BufferedOutputStream;
import java.io.BufferedReader;
import java.io.ByteArrayOutputStream;
import java.io.Closeable;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.net.URL;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.StatusLine;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.MapFragment;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.CameraPosition;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;
import com.squareup.picasso.Picasso;

import android.annotation.SuppressLint;
import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.drawable.BitmapDrawable;
import android.net.Uri;
import android.os.Bundle;
import android.os.StrictMode;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.BaseAdapter;
import android.widget.Button;
import android.widget.GridView;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.LinearLayout.LayoutParams;
import android.widget.TextView;

public class PlaceNationalPark extends Activity {
	GoogleMap map;
    ArrayList<HashMap<String, String>> MyArrList;
	@SuppressLint("NewApi")
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.animal);

		if (android.os.Build.VERSION.SDK_INT > 9) {
			StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder()
					.permitAll().build();
			StrictMode.setThreadPolicy(policy);
		}
		
		showInfo();
	}

	private void showInfo() {
		String image_name;
		// TODO Auto-generated method stub
		final TextView address = (TextView)findViewById(R.id.txt_place_data);
		final TextView phone = (TextView)findViewById(R.id.txt_phone);
		final TextView parkname = (TextView)findViewById(R.id.txt_parkname);
		
		final String call;
		//Button Tab
		Button btn_home = (Button)findViewById(R.id.btn_home);
		Button btn_topography = (Button)findViewById(R.id.btn_topography);
		Button btn_climate = (Button)findViewById(R.id.btn_climate);
		Button btn_plant = (Button)findViewById(R.id.btn_plant);
		Button btn_place = (Button)findViewById(R.id.btn_place);
		Button btn_call = (Button) findViewById(R.id.btn_call);
		
		GridView grid = (GridView) findViewById(R.id.grid_image);

		
		map = ((MapFragment)getFragmentManager()
				.findFragmentById(R.id.mapLocationDetail)).getMap();

    	
    	//String url = "http://10.0.3.2/SouthNationalParkTravel/getAddress.php";
    	//URL �ҡ Host
    	String url = "http://nationparktravel.ictte-project.com/southnationalparktravel/getAddress.php";
    	
    	Intent intent= getIntent();
    	final String id = intent.getStringExtra("pid"); 

		List<NameValuePair> params = new ArrayList<NameValuePair>();
        params.add(new BasicNameValuePair("addressID", id));
        
        //�Ѻ��� id �����觵����ѧ ˹������
        btn_home.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                Intent Home = new Intent(PlaceNationalPark.this, MainMenu.class);
                Home.addFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
				startActivity(Home);
				finish();
            }
        });
        btn_topography.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                Intent topography = new Intent(PlaceNationalPark.this, Topography.class);
                topography.putExtra("pid", id);
				startActivity(topography);

            }
        });
        btn_climate.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                Intent climate = new Intent(PlaceNationalPark.this, Climate.class);
                climate.putExtra("pid", id);
				startActivity(climate);

            }
        });
        btn_plant.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                Intent plant = new Intent(PlaceNationalPark.this, Plant.class);
                plant.putExtra("pid", id);
				startActivity(plant);

            }
        });
        btn_place.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                Intent place = new Intent(PlaceNationalPark.this, PlaceNationalPark.class);
                place.putExtra("pid", id);
				startActivity(place);

            }
        });
        
        String resultServer  = getHttpPost(url,params);
	  	 
    	String strPlace = "";
    	String strPhone = "";
    	String strParkname = "";
    	String strLatitude = "";
    	String strLongtitude = "";

    	JSONObject c;
		try {
			c = new JSONObject(resultServer);
			strPlace = c.getString("address");
			strPhone = c.getString("phone");
			strParkname  = c.getString("parkname");
			strLatitude = c.getString("latitude");
			strLongtitude = c.getString("longtitude");
			final LatLng MapLatLng = new LatLng(Double.valueOf(strLatitude), Double.valueOf(strLongtitude));

			if(!strPlace.equals(""))
			{
				address.setText(strPlace);
				phone.setText("�������Ѿ�� : "+strPhone);
				parkname.setText(strParkname);
				call = strPhone;
				 btn_call.setOnClickListener(new View.OnClickListener() {
			            public void onClick(View v) {

			            	Intent newActivity = new Intent(Intent.ACTION_CALL);
			            	newActivity.setData(Uri.parse("tel:"+call));
			            	startActivity(newActivity);
			            	
			            }
			        });  
				
				CameraPosition cameraK = new CameraPosition.Builder()
                .target(MapLatLng)
                .zoom(10)
                .bearing(0)
                .tilt(0)
                .build();
				map.moveCamera(CameraUpdateFactory.newCameraPosition(cameraK));
				map.addMarker(new MarkerOptions()
			    .position(MapLatLng)
			    .title(strParkname));
			}
			else
			{
				address.setText("-");
				parkname.setText("-");
			}
        	
		} catch (JSONException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		//String url1 = "http://10.0.3.2/SouthNationalParkTravel/getImage.php";
		String url1 = "http://nationparktravel.ictte-project.com/southnationalparktravel/getImage.php";
        
        try {
        	JSONArray data = new JSONArray(getHttpPost(url1,params));
			
	    	MyArrList = new ArrayList<HashMap<String, String>>();
			HashMap<String, String> map;
			
			for(int i = 0; i < data.length(); i++){
                JSONObject j = data.getJSONObject(i);
    			map = new HashMap<String, String>();
    			map.put("image_name", j.getString("name"));
    			MyArrList.add(map);
    			
			}
			grid.setAdapter(new ImageAdapter(this,MyArrList));
			  final AlertDialog.Builder imageDialog = new AlertDialog.Builder(this);
		        final LayoutInflater inflater = (LayoutInflater) this.getSystemService(LAYOUT_INFLATER_SERVICE);
		        
			 grid.setOnItemClickListener(new AdapterView.OnItemClickListener() {
		            public void onItemClick(AdapterView<?> parent, View v, int position, long id) {
     
		            	 View layout = inflater.inflate(R.layout.custom_fullimage_dialog,
		                         (ViewGroup) findViewById(R.id.layout_root));
		                 ImageView image = (ImageView) layout.findViewById(R.id.fullimage);
		                 Picasso.with(PlaceNationalPark.this).load("http://www.nationparktravel.ictte-project.com/images/"+MyArrList.get(position).get("image_name")).into(image);
		                 imageDialog.setIcon(android.R.drawable.btn_star_big_on);	
		         		imageDialog.setTitle("�ٻ�Ҿ");
		                 imageDialog.setView(layout);
		                 imageDialog.setPositiveButton(android.R.string.ok, new DialogInterface.OnClickListener(){

		                     public void onClick(DialogInterface dialog, int which) {
		                         dialog.dismiss();
		                     }

		                 });


		                 imageDialog.create();
		                 imageDialog.show(); 

		            }
		        });
			
		} catch (JSONException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
        public class ImageAdapter extends BaseAdapter 
        {
            private Context context;
            private ArrayList<HashMap<String, String>> MyArr = new ArrayList<HashMap<String, String>>();

            public ImageAdapter(Context c, ArrayList<HashMap<String, String>> list) 
            {
            	// TODO Auto-generated method stub
                context = c;
                MyArr = list;
            }
     
            public int getCount() {
            	// TODO Auto-generated method stub
                return MyArr.size();
            }
     
            public Object getItem(int position) {
            	// TODO Auto-generated method stub
                return position;
            }
     
            public long getItemId(int position) {
            	// TODO Auto-generated method stub
                return position;
            }
    		public View getView(int position, View convertView, ViewGroup parent) {
    			// TODO Auto-generated method stub
    			
    			ImageView image;
    		 
    		 
    			if (convertView == null) {
    				image = new ImageView(context);
    			

    			// ColImage
    			image.setLayoutParams(new GridView.LayoutParams(400,350));
    			image.setScaleType(ImageView.ScaleType.CENTER_CROP);
    			image.setPadding(10, 10, 10, 10);
    			
    			}
    			else{
    				image =(ImageView) convertView;
    			}
    			Picasso.with(context).load("http://www.nationparktravel.ictte-project.com/images/"+MyArr.get(position).get("image_name")).into(image);
    			return image;
    				
    		}
        }
		
   
    


	public String getHttpPost(String url,List<NameValuePair> params) {
		StringBuilder str = new StringBuilder();
		HttpClient client = new DefaultHttpClient();
		HttpPost httpPost = new HttpPost(url);
		
		try {
			httpPost.setEntity(new UrlEncodedFormEntity(params));
			HttpResponse response = client.execute(httpPost);
			StatusLine statusLine = response.getStatusLine();
			int statusCode = statusLine.getStatusCode();
			if (statusCode == 200) { // Status OK
				HttpEntity entity = response.getEntity();
				InputStream content = entity.getContent();
				BufferedReader reader = new BufferedReader(new InputStreamReader(content));
				String line;
				while ((line = reader.readLine()) != null) {
					str.append(line);
				}
			} else {
				Log.e("Log", "Failed to download result..");
			}
		} catch (ClientProtocolException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		return str.toString();
	}
	
			/***** Get Image Resource from URL (Start) *****/
			private static final String TAG = "ERROR";
			private static final int IO_BUFFER_SIZE = 4 * 1024;
			public static Bitmap loadBitmap(String url) {
			    Bitmap bitmap = null;
			    InputStream in = null;
			    BufferedOutputStream out = null;

			    try {
			    	
			        in = new BufferedInputStream(new URL(url).openStream(), IO_BUFFER_SIZE);

			        final ByteArrayOutputStream dataStream = new ByteArrayOutputStream();
			        out = new BufferedOutputStream(dataStream, IO_BUFFER_SIZE);
			        copy(in, out);
			        out.flush();

			        final byte[] data = dataStream.toByteArray();
			        BitmapFactory.Options options = new BitmapFactory.Options();
			        //options.inSampleSize = 1;

			        bitmap = BitmapFactory.decodeByteArray(data, 0, data.length,options);
			    } catch (IOException e) {
			        Log.e(TAG, "Could not load Bitmap from: " + url);
			    } finally {
			        closeStream(in);
			        closeStream(out);
			    }

			    return bitmap;
			}

			 private static void closeStream(Closeable stream) {
			        if (stream != null) {
			            try {
			                stream.close();
			            } catch (IOException e) {
			                android.util.Log.e(TAG, "Could not close stream", e);
			            }
			        }
			    }
			 
			 private static void copy(InputStream in, OutputStream out) throws IOException {
		        byte[] b = new byte[IO_BUFFER_SIZE];
		        int read;
		        while ((read = in.read(b)) != -1) {
		            out.write(b, 0, read);
		        }
		    }
			 /***** Get Image Resource from URL (End) *****/

}
