package app.project2.southnationalpark;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
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

import android.annotation.SuppressLint;
import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.os.StrictMode;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.BaseAdapter;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

public class ProvinceNationalPark extends Activity{
	@SuppressLint("NewApi")
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.listview_nationalpark_province);
		
		// Permission StrictMode
        if (android.os.Build.VERSION.SDK_INT > 9) {
            StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
            StrictMode.setThreadPolicy(policy);
        }
        
        final ListView listView_nationalpark_province = (ListView)findViewById(R.id.lv_nationalpark_province); 
        
        //String url = "http://10.0.3.2/SouthNationalParkTravel/getNationalPark.php";
        String url = "http://nationparktravel.ictte-project.com/southnationalparktravel/getNationalPark.php";
        Intent intent= getIntent();
        final String province_id = intent.getStringExtra("pid"); 
        
    	List<NameValuePair> params = new ArrayList<NameValuePair>();
        params.add(new BasicNameValuePair("sID", province_id));
        
        try {
            JSONArray data = new JSONArray(getJSONUrl(url,params));
			
	    	final ArrayList<HashMap<String, String>> MyArrList = new ArrayList<HashMap<String, String>>();
			HashMap<String, String> map;
			
			
			for(int i = 0; i < data.length(); i++){
                JSONObject c = data.getJSONObject(i);
    			map = new HashMap<String, String>();
    			map.put("id", c.getString("id"));
    			map.put("park_name", c.getString("park_name"));
    			MyArrList.add(map);
			}
			listView_nationalpark_province.setOnItemClickListener(new AdapterView.OnItemClickListener(){
				@Override
		         public void onItemClick(AdapterView<?> parentAdapter, View view, int position,
		                 long id) {
					String pid = "0";
					pid = MyArrList.get(position).get("id");
					//Toast.makeText(ProvinceNationalPark.this, " ID " +pid, Toast.LENGTH_SHORT).show();
						Intent in = new Intent(ProvinceNationalPark.this, Topography.class);
						in.putExtra("pid", pid);
						in.addFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
						startActivity(in);
						finish();
					}
		        
		 
		    });
			
			listView_nationalpark_province.setAdapter(new ImageAdapter(this,MyArrList));
  
			
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
			
			LayoutInflater inflater = (LayoutInflater) context
					.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
		 
		 
			if (convertView == null) {
				convertView = inflater.inflate(R.layout.nationalpark_province, null); 
			}

				
			// ColPosition
			TextView txtPosition = (TextView) convertView.findViewById(R.id.txt_Name_nationalpark);
			txtPosition.setPadding(10, 0, 0, 0);
			txtPosition.setText("" + MyArr.get(position).get("park_name"));
					
		 
			return convertView;
				
		}

    } 
	 /*** Get JSON Code from URL ***/
		public String getJSONUrl(String url,List<NameValuePair> params) {
			StringBuilder str = new StringBuilder();
			HttpClient client = new DefaultHttpClient();
			HttpPost httpPost = new HttpPost(url);
			//HttpGet httpGet = new HttpGet(url);
			try {
				httpPost.setEntity(new UrlEncodedFormEntity(params));
				HttpResponse response = client.execute(httpPost);
				//HttpResponse response = client.execute(httpGet);
				StatusLine statusLine = response.getStatusLine();
				int statusCode = statusLine.getStatusCode();
				if (statusCode == 200) { // Download OK
					HttpEntity entity = response.getEntity();
					InputStream content = entity.getContent();
					BufferedReader reader = new BufferedReader(new InputStreamReader(content));
					String line;
					while ((line = reader.readLine()) != null) {
						str.append(line);
					}
				} else {
					Log.e("Log", "Failed to download file..");
				}
			} catch (ClientProtocolException e) {
				e.printStackTrace();
			} catch (IOException e) {
				e.printStackTrace();
			}
			return str.toString();
		}
}
