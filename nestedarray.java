public class nestedarray
{
	public static void main(String[] args)
	{
		String[][] rofl = new String[3][4];
		for (int x = 0; x < rofl.length; x++) {
			String text = "josh" + x;
			for (int y = 0; y < rofl[x].length; y++) {
				rofl[x][y] = text + y;
			}
		}

		for (int x = 0; x < rofl.length; x++) {
			for (int y = 0; y < rofl[x].length; y++) {
				System.out.println(rofl[x][y]);
			}
		}
	}
}

