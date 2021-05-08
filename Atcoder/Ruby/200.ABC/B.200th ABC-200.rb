n,k=gets.split(" ").map &:to_i

k.times do
if n%200==0
   n=n/200
else
  nn=n.to_s
  nnn=(nn+'200')
  n=nnn.to_i
 end
end
puts n