a=gets.split.map(&:to_i).sort

if(a[0]==a[1]&&a[1]==a[2] || (a[1]-a[0])==(a[2]-a[1]))
  puts "Yes"
else
  puts "No"
end  
