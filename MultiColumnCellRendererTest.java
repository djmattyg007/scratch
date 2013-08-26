import java.awt.*;
import javax.swing.*;

public class MultiColumnCellRendererTest
{
	public static void main(String[] args)
	{
		final String[] fruits = {"Apple", "Pear", "Banana", "Grapefruit" };
		SwingUtilities.invokeLater(new Runnable() {
			public void run() {
				JList fruitList1 = new JList(fruits);
				fruitList1.setCellRenderer(new MultiColumnCellRenderer());
				JList fruitList2 = new JList(fruits);
				fruitList2.setCellRenderer(new MultiColumnCellRenderer2());
				JPanel gui = new JPanel(new GridLayout(1, 0, 2, 2));
				gui.add(fruitList1);
				gui.add(fruitList2);
				JOptionPane.showMessageDialog(null, gui);
			}
		});
	}
}

